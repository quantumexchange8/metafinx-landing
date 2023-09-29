<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('masters.overview');
});

Route::get('Overview', [HomeController::class, 'overview'])->name('overview');
Route::get('IPO-Project', [HomeController::class, 'ipoproject'])->name('ipoproject');
Route::get('IPO-Scheme', [HomeController::class, 'iposcheme'])->name('iposcheme');
Route::get('About-Us', [HomeController::class, 'aboutus'])->name('aboutus');
