<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Jobs\DeleteExpiredFactors;
use Carbon\Carbon;

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


Route::post('/sortShowingMovie', 'MovieController@sortShowingMovie')->name('sortShowingMovie');
Route::post('/sortShowingConcert', 'ConcertController@sortShowingConcert')->name('sortShowingConcert');
Route::post('/sortShowingTheater', 'TheaterController@sortShowingTheater')->name('sortShowingTheater');
Route::post('/sortShowingSearch', 'SiteController@sortShowingSearch')->name('sortShowingSearch');

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
Route::post('/chosen-seats', 'SeatController@seat')->name('chosenseats');
Route::post('/reserve-seats', 'SeatController@reserve')->name('reserveseats');
Route::post('/seatsLiveFeed', 'SeatController@seatsLiveFeed')->name('seatsLiveFeed');
Route::get('/checkout/{id}', 'CheckoutController@checkout')->name('checkout');
Route::post('/discount', 'CheckoutController@discount')->name('discount');

// ======Transaction======

Route::post('/timeout', 'TransactionController@timeout')->name('timeout');
Route::get('/determent/{id}', 'TransactionController@determent')->name('determent');
Route::get('/boxOfficeTransaction/{id}', 'TransactionController@boxOfficeTransaction')->name('boxOfficeTransaction');
Route::get('/zarinpayment/{id}', 'TransactionController@zarinpayment')->name('zarinpayment');
Route::get('/verifypayment', 'TransactionController@verifypayment')->name('verifypayment');
Route::post('/walletDebt', 'TransactionController@walletDebt')->name('walletDebt');
Route::get('/verifyWalletDebt', 'TransactionController@verifyWalletDebt')->name('verifyWalletDebt');
Route::post('/walletTransaction', 'TransactionController@walletTransaction')->name('walletTransaction');

//======End Transaction======

Route::get('/printTicket/{id}', 'CheckoutController@printTicket')->name('printTicket');
Route::get('/finalize/{id}', 'CheckoutController@finalize')->name('finalize');
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
    Route::resource('/sliders','SliderController');
    Route::resource('/genres','GenreController');
    Route::resource('/movies','MovieController');
    Route::resource('/concerts','ConcertController');
    Route::resource('/theaters','TheaterController');
    Route::resource('/shows','ShowController');
    Route::resource('/posts','PostController');
    Route::resource('/reviews','ReviewController');
    Route::resource('/comments','CommentController');
    Route::resource('/locations','LocationController');
    Route::resource('/salons','SalonsController');
});

// ====Admin User====
Route::get('/editUser/{id}', 'Admin\UserController@edit')->middleware('Roles');
Route::post('/updateUser', 'Admin\UserController@update')->middleware('Roles');
Route::get('/deleteUser/{id}', 'Admin\UserController@destroy')->middleware('Roles');

// ====Admin Slider====
Route::get('/createSlider', 'Admin\SliderController@create')->middleware('Roles');
Route::post('/storeSlider', 'Admin\SliderController@store')->middleware('Roles');
Route::get('/editSlider/{id}', 'Admin\SliderController@edit')->middleware('Roles');
Route::get('/deleteSliderPhoto/{id}/{pid}', 'Admin\SliderController@deletePostPhoto')->middleware('Roles');
Route::post('/updateSlider', 'Admin\SliderController@update')->middleware('Roles');
Route::get('/deleteSlider/{id}', 'Admin\SliderController@destroy')->middleware('Roles');

// ====Admin Genre====
Route::get('/createGenre', 'Admin\GenreController@create')->middleware('Roles');
Route::post('/storeGenre', 'Admin\GenreController@store')->middleware('Roles');
Route::get('/editGenre/{id}', 'Admin\GenreController@edit')->middleware('Roles');
Route::post('/updateGenre', 'Admin\GenreController@update')->middleware('Roles');
Route::get('/deleteGenre/{id}', 'Admin\GenreController@destroy')->middleware('Roles');

// ====Admin Movie====
Route::get('/showMovie/{id}', 'Admin\MovieController@show')->middleware('Roles');
Route::get('/createMovie', 'Admin\MovieController@create')->middleware('Roles');
Route::post('/storeMovie', 'Admin\MovieController@store')->middleware('Roles');
Route::get('/editMovie/{id}', 'Admin\MovieController@edit')->middleware('Roles');
Route::get('/deleteMoviePhoto/{id}/{pid}', 'Admin\MovieController@deleteMoviePhoto')->middleware('Roles');
Route::post('/updateMovie', 'Admin\MovieController@update')->middleware('Roles');
Route::get('/deleteMovie/{id}', 'Admin\MovieController@destroy')->middleware('Roles');

// ====Admin Concert====
Route::get('/showConcert/{id}', 'Admin\ConcertController@show')->middleware('Roles');
Route::get('/createConcert', 'Admin\ConcertController@create')->middleware('Roles');
Route::post('/storeConcert', 'Admin\ConcertController@store')->middleware('Roles');
Route::get('/editConcert/{id}', 'Admin\ConcertController@edit')->middleware('Roles');
Route::get('/deleteConcertPhoto/{id}/{pid}', 'Admin\ConcertController@deleteConcertPhoto')->middleware('Roles');
Route::post('/updateConcert', 'Admin\ConcertController@update')->middleware('Roles');
Route::get('/deleteConcert/{id}', 'Admin\ConcertController@destroy')->middleware('Roles');

// ====Admin Theater====
Route::get('/showTheater/{id}', 'Admin\TheaterController@show')->middleware('Roles');
Route::get('/createTheater', 'Admin\TheaterController@create')->middleware('Roles');
Route::post('/storeTheater', 'Admin\TheaterController@store')->middleware('Roles');
Route::get('/editTheater/{id}', 'Admin\TheaterController@edit')->middleware('Roles');
Route::get('/deleteTheaterPhoto/{id}/{pid}', 'Admin\TheaterController@deleteTheaterPhoto')->middleware('Roles');
Route::post('/updateTheater', 'Admin\TheaterController@update')->middleware('Roles');
Route::get('/deleteTheater/{id}', 'Admin\TheaterController@destroy')->middleware('Roles');

// ====Admin Show====
Route::get('/createShow', 'Admin\ShowController@create')->middleware('Roles');
Route::post('/storeShow', 'Admin\ShowController@store')->middleware('Roles');
Route::get('/editShow/{id}', 'Admin\ShowController@edit')->middleware('Roles');
Route::post('/updateShow', 'Admin\ShowController@update')->middleware('Roles');
Route::get('/deleteShow/{id}', 'Admin\ShowController@destroy')->middleware('Roles');

// ====Admin Post====
Route::get('/showPost/{id}', 'Admin\PostController@show')->middleware('Roles');
Route::get('/createPost', 'Admin\PostController@create')->middleware('Roles');
Route::post('/storePost', 'Admin\PostController@store')->middleware('Roles');
Route::get('/editPost/{id}', 'Admin\PostController@edit')->middleware('Roles');
Route::get('/deletePostPhoto/{id}/{pid}', 'Admin\PostController@deletePostPhoto')->middleware('Roles');
Route::post('/updatePost', 'Admin\PostController@update')->middleware('Roles');
Route::get('/deletePost/{id}', 'Admin\PostController@destroy')->middleware('Roles');

// ====Admin Review====
Route::get('/updateEventStatus/{id}', 'Admin\ReviewController@update')->middleware('Roles');
Route::get('/deleteEventCm/{id}', 'Admin\ReviewController@destroy')->middleware('Roles');

// ====Admin Comment====
Route::get('/updatePostStatus/{id}', 'Admin\CommentController@update')->middleware('Roles');
Route::get('/deletePostCm/{id}', 'Admin\CommentController@destroy')->middleware('Roles');

// ====Admin Locations====
Route::get('/createLocations', 'Admin\LocationController@create')->middleware('Roles');
Route::post('/storeLocations', 'Admin\LocationController@store')->middleware('Roles');
Route::get('/editLocations/{id}', 'Admin\LocationController@edit')->middleware('Roles');
Route::post('/updateLocations', 'Admin\LocationController@update')->middleware('Roles');
Route::get('/deleteLocations/{id}', 'Admin\LocationController@destroy')->middleware('Roles');

// ====Admin Salons====
Route::get('/showSalons/{id}', 'Admin\SalonsController@show')->middleware('Roles');
Route::get('/createSalons', 'Admin\SalonsController@create')->middleware('Roles');
Route::post('/storeSalons', 'Admin\SalonsController@store')->middleware('Roles');
Route::get('/editSalons/{id}', 'Admin\SalonsController@edit')->middleware('Roles');
Route::post('/updateSalons', 'Admin\SalonsController@update')->middleware('Roles');
Route::get('/deleteSalons/{id}', 'Admin\SalonsController@destroy')->middleware('Roles');

// ====Admin Segment====
Route::get('/editSegment/{id}', 'Admin\SegmentController@edit')->middleware('Roles');
Route::post('/updateSegment', 'Admin\SegmentController@update')->middleware('Roles');
Route::get('/createSegment/{id}', 'Admin\SegmentController@create')->middleware('Roles');
Route::post('/storeSegment', 'Admin\SegmentController@store')->middleware('Roles');
Route::get('/deleteSegment/{id}', 'Admin\SegmentController@destroy')->middleware('Roles');

// ===================End Admin=======================

Route::post('/search', 'SiteController@search')->name('search');
Route::post('/searchgenre', 'SiteController@searchgenre')->name('searchgenre');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/send', 'ContactController@send');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/review','ReviewController@review')->name('review');
Route::post('/addfavorite','ReviewController@favorite')->name('addfavorite');
