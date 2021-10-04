<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AboutbtnController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TitreController;
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


Route::get('/', [HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/titres', TitreController::class);

Route::resource('/header', HeaderController::class);

Route::resource('/hero', HeroController::class);

Route::resource('/about', AboutController::class);

Route::resource('/aboutbtn', AboutbtnController::class);

Route::resource('/feature', FeatureController::class);

Route::resource('/service', ServiceController::class);

Route::resource('/portfolios', PortfolioController::class );

Route::resource('/testimonials', TestimonialController::class);

Route::resource("/teams", TeamController::class);

Route::resource("/contacts", ContactController::class);

Route::resource("/footers", FooterController::class);
