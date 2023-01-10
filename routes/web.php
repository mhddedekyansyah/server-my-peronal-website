<?php

use App\Http\Controllers\{DashboardController, AboutController, HeroController, ShowcaseController, SkillController, SosmedController};
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

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

Route::prefix('dashboard')->group(function(){
    Route::get('',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('hero', HeroController::class);
    Route::resource('about', AboutController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('sosmed', SosmedController::class);
    Route::resource('showcase', ShowcaseController::class);
});
