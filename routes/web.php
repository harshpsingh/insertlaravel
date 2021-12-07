<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\makeprofile;
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
use  Illuminate\Http\Response;
use App\Models\profile;
Route::get('/', function () {
    return view('index');
});
Route::post('store',[makeprofile::class,'store']);

Route::get('/view', function (Request $request) {
  $profile=profile::all();


   return view('view', ['profile'=>$profile]);
});
Route::post('show',[makeprofile::class,'show']);
