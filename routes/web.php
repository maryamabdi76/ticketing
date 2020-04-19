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


Route::get('/', 'SiteController@index')->name('bilito');

Auth::routes();

// ===================Start Movie=======================

Route::get('/movie', 'MovieController@index')->name('movie');
Route::get('/movie/genres/{id}', 'MovieController@genres')->name('genresmovie');
Route::post('/moviegenre', 'MovieController@searchgenre')->name('moviegenre');
Route::post('/searchmovie', 'MovieController@searchmovie')->name('searchmovie');
Route::get('/movie-details/{id}', 'MovieController@details')->name('movie-details');

// ===================End Movie=======================


// ===================Start concert =======================

Route::get('/concert', 'ConcertController@index')->name('concert');
Route::get('/concert/genres/{id}', 'ConcertController@genres')->name('genresconcert');
Route::post('/concertgenre', 'ConcertController@searchgenre')->name('concertgenre');
Route::post('/searchconcert', 'ConcertController@searchconcert')->name('searchconcert');
Route::get('/concert-details/{id}', 'ConcertController@details')->name('concert-details');
Route::get('/concert-speaker', 'ConcertController@speaker')->name('concert-speaker');

// ===================End Concert=======================


// ===================Start Theater=======================

Route::get('/theater', 'TheaterController@index')->name('theater');
Route::get('/theater/genres/{id}', 'TheaterController@genres')->name('genrestheater');
Route::post('/theatergenre', 'TheaterController@searchgenre')->name('theatergenre');
Route::post('/searchtheater', 'TheaterController@searchtheater')->name('searchtheater');
Route::get('/theater-details/{id}', 'TheaterController@details')->name('theater-details');

// ===================End Theater=======================


// ===================Start Buy=======================

Route::post('/ticket', 'TicketController@ticket')->name('ticket');
Route::post('/seat', 'SeatController@index')->name('index');
Route::post('/chosen-seats', 'SeatController@seat')->name('seat');
Route::get('/checkout/{id}', 'CheckoutController@checkout')->name('checkout');

// Route::post('/movie-ticket', 'MovieController@ticket')->name('movie-ticket');
// Route::get('/movie-seat/{id}', 'MovieController@seat')->name('movie-seat');
// Route::get('/movie-checkout/{id}', 'MovieController@checkout')->name('movie-checkout');

Route::get('/thank', function () {
    return view('thank');
});

// ===================End Buy=======================


// ===================Start Blog=======================

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/searchblog', 'BlogController@searchblog')->name('searchblog');
Route::get('/blog/tags/{id}', 'BlogController@searchtag')->name('searchtag');
Route::get('/blog-details/{id}', 'BlogController@details')->name('blog-details');
Route::post('/addCommentBlog', 'BlogController@addcomment')->name('addCommentBlog');

// ===================End Blog=======================


// ===================Start Profile=======================

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::get('/proinfoedit', ['as'=>'profile.proinfoedit','uses'=>'ProfileController@proinfoedit']);
Route::post('/proinfoupdate','ProfileController@proinfoupdate')->name('proinfoupdate');
Route::get('/addressedit', ['as'=>'profile.addressedit','uses'=>'ProfileController@addressedit']);
Route::get('/wallet', ['as'=>'profile.wallet','uses'=>'ProfileController@wallet']);
Route::get('/lastfactors', ['as'=>'profile.lastfactors','uses'=>'ProfileController@lastfactors']);
Route::get('/favorites', ['as'=>'profile.favorites','uses'=>'ProfileController@favorites']);
Route::get('/work', ['as'=>'profile.work','uses'=>'ProfileController@work']);
Route::get('/invoice', ['as'=>'profile.work','uses'=>'ProfileController@invoice']);

// ===================End Profile=======================


// ===================Start Admin=======================

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('Roles')->group(function(){
    Route::resource('/users','UserController');
});
Route::get('/edit/{id}', 'Admin\UserController@edit')->middleware('Roles');
Route::post('/update', 'Admin\UserController@update')->middleware('Roles');
Route::get('/delete/{id}', 'Admin\UserController@destroy')->middleware('Roles');

// ===================End Admin=======================


Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/review','ReviewController@review')->name('review');
