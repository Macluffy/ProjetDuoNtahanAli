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
use App\Http\Controllers\MailController;
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

Route::resource('/titres', TitreController::class)->middleware(['auth']);

Route::resource('/header', HeaderController::class)->middleware(['auth','webdev']);

Route::resource('/hero', HeroController::class)->middleware(['auth','webdev']);

Route::resource('/about', AboutController::class)->middleware(['auth','webdev']);

Route::resource('/aboutbtn', AboutbtnController::class)->middleware(['auth','webdev']);

Route::resource('/feature', FeatureController::class)->middleware(['auth','webdev']);

Route::resource('/service', ServiceController::class)->middleware(['auth','webdev']);

Route::resource('/portfolios', PortfolioController::class )->middleware(['auth','webdev']);

Route::resource('/testimonials', TestimonialController::class)->middleware(['auth']);

Route::resource("/teams", TeamController::class)->middleware(['auth','webdev']); 

Route::resource("/contacts", ContactController::class)->middleware(['auth','webdev']);

Route::resource("/footers", FooterController::class)->middleware(['auth','webdev']);


Route::post("/send-mail", [MailController::class, "sendMail"])->name("sendMail");