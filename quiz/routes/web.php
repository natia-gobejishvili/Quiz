<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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
    //  Route::get('/', function () {
  
    //      return "Admin Panel";
    //  });
  
      Route::resource('quizzes', QuizController::class);
     // Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
  
  });
  
//////////////////////////////
Route::get('/mainquizzes', [QuizController::class, "showQuizzes"]);
Route::get('/mainquizzes/{id}', [QuizController::class, "quiz"]);

Route::get('/mainquizzes/{id}/startquiz', [QuizController::class, "startQuiz"]);
Route::get('/mainquizzes/{id}/startquiz/result', [QuizController::class, "Result"]);

//Route::get('/startquiz', [QuizController::class, "startQuiz"]);
//Route::get('/startquiz/{id}', [QuizController::class, "result"]);

Route::get('/', function () {
    return view('welcome');
});
