<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerController;

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

Route::domain('admin.localhost')->group(function () {
      Route::resource('quizzes', QuizController::class);
  });
  
//////////////////////////////
Route::get('/mainquizzes', [QuizController::class, "showQuizzes"]);
Route::get('/mainquizzes/{id}', [QuizController::class, "quiz"]);

Route::get('/mainquizzes/{id}/startquiz', [QuizController::class, "startQuiz"]);
Route::get('/mainquizzes/{id}/startquiz/result', [QuizController::class, "Result"]);


//////////////////////////////////////////////
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
///////////////////////////////////////
Route::resource('customer', CustomerController::class);



Route::get('/', function () {
    return view('welcome');
});
