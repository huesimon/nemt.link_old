<?php

use App\Http\Controllers\TelegramMessagesController;
use App\ShortURL;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'shorturl' => 'ShortURLController',
    'radiocodes' => 'RenaultRadioCodeController',
    'telegram' => 'TelegramMessagesController',
    ]);

Route::get('/radiocodes/find/{security_code}', 'RenaultRadioCodeController@showBySecurityCode')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/telegram/webhook', 'TelegramMessagesController@webhook')->name('telegram-webhook');

// Wildcard route needs to be added last!!
Route::get('/{shorturl}', function ($shortUrl) {
    $shortUrl = ShortURL::where('short_url', $shortUrl)->orderBy('id', 'DESC')->firstOrFail();
    
    return new RedirectResponse($shortUrl->url);
});
