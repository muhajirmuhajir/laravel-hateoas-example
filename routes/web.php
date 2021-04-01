<?php

use App\Http\Resources\MessageCollection;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\MessageResource;

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

Route::get('/messages', function () {
    return new MessageCollection(Message::all());
})->name('message.all');

Route::get('/messages/{id}', function ($id) {
    return new MessageResource(Message::findOrFail($id));
})->name('message.show');

Route::delete('/messages/{id}', function ($id) {
    return new MessageResource(Message::destroy($id));
})->name('message.destroy');
