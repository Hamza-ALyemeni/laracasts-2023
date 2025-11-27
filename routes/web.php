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
Route::get('/jobs',[jobController::class ,'index']);
Route::get('/jobs/create', [jobController::class,'create']);
Route::get('/jobs/{job}',  [jobController::class, 'show']);
Route::post('/jobs',[jobController::class , 'store']);
Route::get('/jobs/{job}/edit', [jobController::class, 'edit']);
Route::patch('/jobs/{job}', [jobController::class, 'update']);
Route::delete('/jobs/{job}', [jobController::class, 'destroy']);
Route::view('/contact', 'contact');

Route::get('/register' , [UserRegisterController::class , 'create']);
Route::post('/register' , [UserRegisterController::class , 'store']);

Route::get('/login' , [SessionController::class , 'create']);
Route::post('/login' , [SessionController::class , 'store']);

Route::post('/logout' , [SessionController::class , 'destroy']);


// Route::get('/contact', function () {
//     return view('contact');
// });
