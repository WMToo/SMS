<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentcontroller;

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


Route::get('/', [Studentcontroller::class, 'index']);
Route::get('/edit/{id}', [Studentcontroller::class, 'edit']);
Route::get('/show/{id}', [Studentcontroller::class, 'show']);
Route::get('/create', [Studentcontroller::class, 'create']);
Route::post('/store', [Studentcontroller::class, 'store']);
Route::post('/update/{id}', [Studentcontroller::class, 'update']);
// Route::get('/edit/{id}',"Studentcontroller@edit");
// Route::get('/show/{id}',"Studentcontroller@show");
// Route::get('/create',"Studentcontroller@create");
// Route::post('/store',"Studentcontroller@store");
// Route::post('/udpate/{id}',"Studentcontroller@update");