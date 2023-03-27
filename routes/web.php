<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakeController;

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

Route::get('/', [FakeController::class, 'index'])->name('homepage');
// Route::get('/', function () {
//     return view('welcome');
// })->name('homepage');


Route::get('/filmsr', [FakeController::class,'filmsr'])->name('cataloguefm');
// Route::get('/catalogo', function () {
//     return view('catalogue');
// })->name('catalogue');

Route::get('/tvseries', [FakeController::class,'tvseries'])->name('cataloguetv');

Route::get('/catalogofm/{id}', [FakeController::class,'catalogofm'])->name('catalogue1');
