<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $job = Job::all();
    return view('welcome');
});

Route::get('/jobs', function (){
    return view('jobs',[
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id){
    //dd($id);
    $job = Job::find($id);

    //dd($job);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
