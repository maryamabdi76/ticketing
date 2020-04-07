<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bilito');
});

Route::get('/movie', 'MovieController@index')->name('movie');
Route::get('/movie-details', 'MovieController@details')->name('movie-details');
Route::get('/movie-ticket', 'MovieController@ticket')->name('movie-ticket');
Route::get('/movie-seat', 'MovieController@seat')->name('movie-seat');
Route::get('/movie-checkout', 'MovieController@checkout')->name('movie-checkout');

Route::get('/concert', 'ConcertController@index')->name('concert');
Route::get('/concert-details', 'ConcertController@details')->name('concert-details');
Route::get('/concert-ticket', 'ConcertController@ticket')->name('concert-ticket');
Route::get('/concert-seat', 'ConcertController@seat')->name('concert-seat');
Route::get('/concert-checkout', 'ConcertController@checkout')->name('concert-checkout');
Route::get('/concert-speaker', 'ConcertController@speaker')->name('concert-speaker');

Route::get('/theater', 'TheaterController@index')->name('theater');
Route::get('/theater-details', 'TheaterController@details')->name('theater-details');
Route::get('/theater-ticket', 'TheaterController@ticket')->name('theater-ticket');
Route::get('/theater-seat', 'TheaterController@seat')->name('theater-seat');
Route::get('/theater-checkout', 'TheaterController@checkout')->name('theater-checkout');

Route::get('/thank', function () {
    return view('thank');
});

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog-details', 'BlogController@details')->name('blog-details');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::get('/proinfoedit', ['as'=>'profile.proinfoedit','uses'=>'ProfileController@proinfoedit']);
Route::get('/addressedit', ['as'=>'profile.addressedit','uses'=>'ProfileController@addressedit']);
Route::get('/wallet', ['as'=>'profile.wallet','uses'=>'ProfileController@wallet']);
Route::get('/lastfactors', ['as'=>'profile.lastfactors','uses'=>'ProfileController@lastfactors']);




Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('Roles')->group(function(){
    Route::resource('/users','UserController');
});
Route::get('/edit/{id}', 'Admin\UserController@edit')->middleware('Roles');
Route::post('/update', 'Admin\UserController@update')->middleware('Roles');
Route::get('/delete/{id}', 'Admin\UserController@destroy')->middleware('Roles');
