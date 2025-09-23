<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function (){
    return view('jobs',[
        'jobs' => Job::allJobsArray()
    ]);
});

Route::get('/jobs/{id}', function ($id){
    //dd($id);
    $job = Job::findJob($id);

    //dd($job);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
