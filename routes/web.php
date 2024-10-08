<?php

use App\Http\Controllers\PostController as PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController as TeacherController;
use App\Http\Controllers\SpecialtyController as SpecialtyController;
use App\Http\Controllers\StudentCouncilController as StudentCouncilController;
use App\Http\Controllers\PublicCouncilController as PublicCouncilController;
use App\Http\Controllers\SchoolDocumentController as SchoolDocumentController;
use App\Http\Controllers\MonDocumentController as MonDocumentController;
use App\Http\Controllers\ImageController as ImageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  fn() => view('home'))->name('home');
Route::get('/teachers', [TeacherController::class, 'teachers'])->name('teachers');
Route::get('/specialties', [SpecialtyController::class, 'specialties'])->name('specialties');
Route::get('/studentCouncil', [StudentCouncilController::class, 'studentCouncil'])->name('studentCouncil');
Route::get('/publicCouncil', [PublicCouncilController::class, 'publicCouncil'])->name('publicCouncil');
Route::get('/schoolDocuments', [SchoolDocumentController::class, 'schoolDocuments'])->name('schoolDocuments');
Route::get('/gallery', [ImageController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{image}', [ImageController::class, 'images'])->name('images');
Route::get('/monDocuments', [MonDocumentController::class, 'monDocuments'])->name('monDocuments');
Route::get('/history',  fn() => view('history'))->name('history');
Route::get('/contacts',  fn() => view('contacts'))->name('contacts');
Route::get('/news', [PostController::class, 'posts'])->name('news');
Route::get('/news/{post}', [PostController::class, 'details'])->name('details');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
