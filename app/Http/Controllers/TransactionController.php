<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Events;
use App\Models\Salons;
use App\Models\Factors;
use App\Models\Locations;
use App\Models\Transactions;
use App\Models\Wallets;
use App\User;
use Shetabit\Payment\Invoice;
use Shetabit\Payment\Facade\Payment;
use SoapClient;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    public function zarinpayment($id){

        $factor = Factors::find($id);
        $user_id = $factor->users_id;
        $user = User::find($user_id);

        $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
        $Amount = $factor->total;
        $Description = 'توضیحات تراکنش تستی';
        $Email = $user->email;
        $Mobile = $user->phone;
        $CallbackURL = 'http://127.0.0.1:8000/verifypayment';

        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
        [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
        ]
        );

        $autho= $result->Authority;
        $status= $result->Status;
        $transaction= new Transactions();
        $transaction->factors_id = $id;
        $transaction->authority = 'zarinpal-'.$autho;
        $transaction->amount = $Amount;
        $transaction->status = $status;
        $transaction->type = 1;
        $transaction->save();

        if ($result->Status == 100) {
        $url= 'https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority;
        return Redirect::to($url);
        } else {
        echo'ERR: '.$result->Status;
        }

    }


    public function verifypayment(){

        $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
        $Authority = $_GET['Authority'];
        $autho = 'zarinpal-'.$Authority;
        $tran = Transactions::where('authority','=',$autho)->get();
        $tran_id = $tran[0]->id;
        $factor_id = $tran[0]->factors_id;
        $Amount = $tran[0]->amount;
        $transaction = Transactions::find($tran_id);

        if ($_GET['Status'] == 'OK') {

            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
            [
            'MerchantID' => $MerchantID,
            'Authority' => $Authority,
            'Amount' => $Amount,
            ]
            );

            if ($result->Status == 100) {
                $transaction->refid = $result->RefID;
                $transaction->status = $result->Status;

                $defactor = Factors::where('id','=',$factor_id)->with('shows')->get();
                $shows_id = $defactor[0]->shows[0]->id;
                $shows = Shows::find($shows_id);
                $shows->factors()->where('id',$factor_id)->wherePivot('seat_number','0')->detach();

                $factor = Factors::find($factor_id);
                $factor->status = 2;
                $factor->save();

            } else {
                $transaction->status = $result->Status;
            }

        }
        else {
            $transaction->status = 'canceled';
        }

        $transaction->save();
        return redirect("/finalize/$factor_id");

    }


    public function walletDebt(Request $request){

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
        $Amount = $request->post('amount');
        $Description = 'توضیحات تراکنش تستی';
        $Email = $user->email;
        $Mobile = $user->phone;
        $CallbackURL = 'http://127.0.0.1:8000/verifyWalletDebt';

        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest(
        [
        'MerchantID' => $MerchantID,
        'Amount' => $Amount,
        'Description' => $Description,
        'Email' => $Email,
        'Mobile' => $Mobile,
        'CallbackURL' => $CallbackURL,
        ]
        );

        $autho= $result->Authority;
        $status= $result->Status;
        $transaction= new Transactions();
        $transaction->authority = 'zarinpal-'.$autho;
        $transaction->amount = $Amount;
        $transaction->status = $status;
        if(Auth()->user()->roles->first()->name=='User'){
            $transaction->type = 2;}
        elseif(Auth()->user()->roles->first()->name=='BoxOffice'){
            $transaction->type = 3;}
        $transaction->save();

        if ($result->Status == 100) {
        $url= 'https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority;
        return Redirect::to($url);
        } else {
        echo'ERR: '.$result->Status;
        }

    }

    public function verifyWalletDebt(){
        $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX';
        $Authority = $_GET['Authority'];
        $autho = 'zarinpal-'.$Authority;
        $tran = Transactions::where('authority','=',$autho)->get();
        $tran_id = $tran[0]->id;
        $Amount = $tran[0]->amount;
        $transaction = Transactions::find($tran_id);
        $user_id = auth()->user()->id;

        if ($_GET['Status'] == 'OK') {

            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
            [
            'MerchantID' => $MerchantID,
            'Authority' => $Authority,
            'Amount' => $Amount,
            ]
            );

            if ($result->Status == 100) {
                $transaction->refid = $result->RefID;
                $transaction->status = $result->Status;

                $wallet = Wallets::where('users_id','=',$user_id)->get();
                $money = $wallet[0]->money;
                $wallet_id = $wallet[0]->id;
                if(Auth()->user()->roles->first()->name=='User'){
                    $newmoney = $money + $Amount;}
                elseif(Auth()->user()->roles->first()->name=='BoxOffice'){
                    $newmoney = $money - $Amount;}

                $newwallet = Wallets::find($wallet_id);
                $newwallet->money = $newmoney;
                $newwallet->save();
            } else {
                $transaction->status = $result->Status;
            }

        }
        else {
            $transaction->status = 'canceled';
        }

        $transaction->save();
        return redirect('/wallet');

    }

    public function walletTransaction(Request $request){
        $factor_id = $request->post('factor_id');
        $factor = Factors::where('id','=',$factor_id)->get();
        $amount = $factor[0]->total;

        $user_id = auth()->user()->id;
        $wallet = Wallets::where('users_id','=',$user_id)->get();
        $money = $wallet[0]->money;
        $remain = $money-$amount;

        if($remain>=0){
            $wallet_id = $wallet[0]->id;
            $newwallet = Wallets::find($wallet_id);
            $newwallet->money = $remain;
            $newwallet->save();

            $transaction= new Transactions();
            $transaction->factors_id = $factor_id;
            $transaction->authority = 'WalletPaid-'.$factor_id.'-'.$amount;
            $transaction->amount = $amount;
            $transaction->status = 100;
            $transaction->type = 4;
            $transaction->save();

            $finalizeFactor = Factors::find($factor_id);
            $finalizeFactor->status = 2;
            $finalizeFactor->save();

            return redirect("/finalize/$factor_id");
        }else{
            $msg = "wallet";
            $get = $factor_id.'-'.$msg;
            return redirect("checkout/$get");
        }
    }

    public function boxOfficeTransaction($id)
    {
        $factor = Factors::find($id);
        $total= $factor->total;
        $debt= (85 / 100) * $total;

        $user_id=auth()->user()->id;
        $wallet_info= Wallets::where('users_id','=',$user_id)->get(['id','money']);
        $money=$wallet_info[0]->money+$debt;
        $wallet_id=$wallet_info[0]->id;

        $wallet= Wallets::find($wallet_id);
        $wallet->money= $money;
        $wallet->save();

        $factor->status=3;
        $factor->save();

        return redirect("/finalize/$id");
    }


    public function timeout(Request $request)
    {
        $eventcat=$request->post('eventcat');
        $event_id=$request->post('event_id');
        $factor_id=$request->post('factor_id');
        $factor = Factors::find($factor_id);
        $factor->delete();
        return redirect("/$eventcat-details/$event_id")->with('error','متاسفانه مدت زمان شما برای نهایی کردن سفارشتان به پایان رسید !');;
    }

    public function determent($id)
    {
        $get=explode('-',$id);
        $event_id=$get[1];
        $eventcat=$get[2];
        $factor_id=$get[0];
        $factor = Factors::find($factor_id);
        $factor->delete();
        return redirect("/$eventcat-details/$event_id");
    }


}
