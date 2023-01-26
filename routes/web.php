<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\QuestionController;
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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('contact', [ContactFormController::class, 'create']) ;
Route::post('Contacts', [ContactFormController::class, 'store']);


Route::get('/questions', [QuestionController::class, 'view'])->middleware(['auth', 'verified'])->name('questions');
Route::get('/zorgvraag/reaction', [QuestionController::class, 'viewReactZorgvraag'])->middleware(['auth', 'verified'])->name('zorgvraag.reaction');
Route::get('/zorgverleners/reaction', [QuestionController::class, 'viewReactZorgverleeners'])->middleware(['auth', 'verified'])->name('zorgverleners.reaction');
Route::post('/zorgverleners/store', [QuestionController::class, 'viewReactZorgverleeners_store'])->name('question.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // ...
    Route::resource('appointments', 'Admin\AppointmentsController');
    Route::post('appointments_ajax_update',
        ['uses' => 'Admin\AppointmentsController@ajaxUpdate', 'as' => 'appointments.ajax_update']);
});

require __DIR__.'/auth.php';
