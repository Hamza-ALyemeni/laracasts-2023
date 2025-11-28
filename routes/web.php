<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\jobController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\SessionController;


// Route::get('/', function () {
//     $job = Job::all();
//     return view('welcome');
// });

Route::view('/', 'welcome');
Route::view('/contact', 'contact');

// Route::resource('jobs', jobController::class)->middleware('auth');

Route::get('/jobs',[jobController::class ,'index']);
Route::get('/jobs/create', [jobController::class,'create']);
Route::get('/jobs/{job}',  [jobController::class, 'show']);
Route::post('/jobs',[jobController::class , 'store'])->middleware('auth');;
//Route::get('/jobs/{job}/edit', [jobController::class, 'edit'])->middleware(['auth','edit,job']);
Route::get('/jobs/{job}/edit', [jobController::class, 'edit'])->middleware('auth')->can('edit', 'job');
Route::patch('/jobs/{job}', [jobController::class, 'update']);
Route::delete('/jobs/{job}', [jobController::class, 'destroy']);

Route::get('/register' , [UserRegisterController::class , 'create']);
Route::post('/register' , [UserRegisterController::class , 'store']);

Route::get('/login' , [SessionController::class , 'create'])->name('login');
Route::post('/login' , [SessionController::class , 'store']);

Route::post('/logout' , [SessionController::class , 'destroy']);


// Route::get('/contact', function () {
//     return view('contact');
// });
