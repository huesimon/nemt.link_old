<?php

use App\ShortURL;
use Illuminate\Http\RedirectResponse;
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
    return view('welcome');
});


Route::get('/{shorturl}', function ($shortUrl) {
    $shortUrl = ShortURL::where('short_url', $shortUrl)->orderBy('id', 'DESC')->firstOrFail();
    
    return new RedirectResponse($shortUrl->url);
});


Route::resources([
    'shorturl' => 'ShortURLController'
    ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
