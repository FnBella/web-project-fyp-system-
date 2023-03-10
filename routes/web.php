<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\userControl;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[homeControl::class,"index"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::view('createproject','admin.createproject');
Route::POST('/add',[adminControl::class,"addData"]);
Route::get('/projectlist',[adminControl::class,"show"]);

Route::get('/list',[userControl::class,"listOut"]);  //project list
Route::get('upd/{id}',[userControl::class,"showStud"]); 
Route::POST('/edit',[userControl::class,"update"]); //update form
// Route::get("del/{id}",[userControl::class,'delete']); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
