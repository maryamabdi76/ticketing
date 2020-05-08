<?php

namespace App\Http\Controllers;

use Analytics;
use Spatie\Analytics\Period;
use App\Libraries\GoogleAnalytics;

use App\Models\Events;
use App\User;
use Carbon\Carbon;
use App\Models\Factors;
use App\Models\Posts;
use App\Models\Shows;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Roles');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $startDate = Carbon::now()->subYear();
        $endDate = Carbon::now();
        //$data = GoogleAnalytics::visitors_and_pageviews();
        //dd($data);exit;
        $analyticsData_one = Analytics::fetchVisitorsAndPageViews(Period::create($startDate, $endDate));
        $dates = $analyticsData_one->pluck('date');
        $visitors = $analyticsData_one->pluck('visitors');
        $pageViews= $analyticsData_one->pluck('pageViews');

        $analyticsData = Analytics::fetchMostVisitedPages(Period::create($startDate, $endDate), 7);
        $url = $analyticsData->pluck('url');
        $pageViews2 = $analyticsData->pluck('pageViews');
        
        /* $analyticsData_two = Analytics::fetchVisitorsAndPageViews(Period::days(14)); */
        /* $this->data2['two_dates'] = $analyticsData_two->pluck('date'); */
        /* $this->data2['two_visitors'] = $analyticsData_two->pluck('visitors')->count(); */
        /* $this->data2['two_pageTitle'] = $analyticsData_two->pluck('pageTitle')->count(); */
        /* $analyticsData_three = Analytics::fetchMostVisitedPages(Period::days(14)); */
        /* $this->data2['three_url'] = $analyticsData_three->pluck('url'); */
        /* $this->data2['three_pageTitle'] = $analyticsData_three->pluck('pageTitle'); */
        /* $this->data2['three_pageViews'] = $analyticsData_three->pluck('pageViews'); */
        $browserjson = GoogleAnalytics::topbrowsers();
        $result = GoogleAnalytics::country();
        $country = $result->pluck('country');
        $country_sessions= $result->pluck('sessions');
        $ceci_ver= config('mycms.ceci_ver');



        $soldSeats=$cash=0;
        $factor=Factors::with('shows')->get();
        foreach($factor as $f){
            foreach($f->shows as $fs){
                $soldSeats++;
            }
        }
        foreach($factor as $f){
            $cash+=$f->total;
        }

        $best = (Factors::join('factors_show', 'factors.id', '=', 'factors_show.factors_id')
            ->select('factors.id', 'factors_show.shows_id')
            ->groupBy('factors.id', 'factors_show.shows_id', 'factors_show.factors_id'))
            ->get()->groupBy('shows_id', 'factors.id');
        foreach ($best as $k => $v) {
            $showid[$k] = $v->count();
        }
        uasort($showid, function ($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? 1 : -1;
        });
        // find event id
        foreach ($showid as $k => $v) {
            $bestshow[] = Events::join('shows', 'events.id', 'shows.events_id')->where('shows.id', '=', $k)->select('events.id')->get();
        }
        foreach ($bestshow as $k => $v) {
            $x[] = $v[0]->id;
        }

        $x = array_slice(array_unique($x), 0, 5);
        //find event
        foreach ($x as $v) {
            $bestsell[] = Events::where('id', '=', $v)->get();
        }



        $sell = (Factors::join('factors_show', 'factors.id', '=', 'factors_show.factors_id')
            ->select('factors.id', 'factors_show.shows_id')
            ->groupBy('factors.id', 'factors_show.shows_id', 'factors_show.factors_id'))
            ->get()->groupBy('shows_id', 'factors.id');
        foreach ($sell as $k => $v) {
            $showsell[$k] = $v->count();
        }
        uasort($showsell, function ($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? 1 : -1;
        });
        // find event id
        foreach ($showsell as $k => $v) {
            $sells[] = [Events::join('shows', 'events.id', 'shows.events_id')->where('shows.id', '=', $k)->select('events.id')->get(),$v];
        }
        foreach ($sells as $k => $v) {
            $y[] = [ $v[0][0]->id , $v[1] ];
        }
        function unique_multidim_array($array, $key) {
            $temp_array = array();
            $i = 0;
            $key_array = array();

            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }
            return $temp_array;
        }
        $y= unique_multidim_array($y,0);
        //find event
        $countfactor=0;
        foreach ($y as $v) {
            $countfactor += $v[1];
        }
        foreach ($y as $v) {
            $sold[] = [Events::where('id', '=', $v[0])->get(),$v[1]];
        }
        $factors = (Factors::join('factors_show', 'factors.id', '=', 'factors_show.factors_id')
            ->select('factors.id as factor_id')
            ->groupBy('factors.id', 'factors_show.shows_id', 'factors_show.factors_id'))
            ->get()->count();

        $shows=Shows::all();
        $data = array(
            'users' => User::count(),
            'events' => Events::count(),
            'countshows' => Shows::distinct('events_id')->count(),
            'countfactor'=>$countfactor,
            'factors' => $factors,
            'bestsell' => $bestsell,
            'sold' => $sold,
            'soldSeats' => $soldSeats,
            'cash' => $cash,
            'shows' => $shows,
            'analyticsData'=>$analyticsData,
            'views' => Posts::sum('views'),
            'dates' => $dates,
            'visitors' => $visitors,
            'pageViews' => $pageViews,
            'url' => $url,
            'pageViews2' => $pageViews2,
            'country' => $country,
            'country_sessions' => $country_sessions,
            'browserjson'=>$browserjson,
            'ceci_ver' => $ceci_ver,
            // 'mostratings' => Reviews::having('rating', '>=', 1)->count(),
        );


    return view('home')->with($data);
    }
}
