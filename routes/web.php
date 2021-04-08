<?php

use App\Http\Controllers\DosenController;
use App\Http\Resources\MessageCollection;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\MessageResource;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

routes -> DosenController -> DosenResource -> DosenHateoas


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

Route::put('/messages/{id}', function (Request $request, $id) {
    $message = Message::findOrFail($id);
    $message->update($request->all());
    return new MessageResource($message);
})->name('message.update');


Route::get('dosen/{id}', [DosenController::class, 'show'])->name('dosen.show');

Route::get('dosen/{id}/izin', [DosenController::class, 'izin'])->name('dosen.izin');
