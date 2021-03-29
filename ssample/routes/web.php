<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

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

Route::get('sample/upload', [SampleController::class, 'index']);
// Route::get('sample/upload', function (){
//     return view('sample.upload', compact('result'));
// });
Route::post('sample/upload', [SampleController::class, 'upload']);

