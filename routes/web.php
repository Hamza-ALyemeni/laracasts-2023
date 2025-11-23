<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $job = Job::all();
    return view('welcome');
});

Route::get('/jobs', function (){
    $jobs = Job::with('employer')->latest()->paginate(5);
    return view('jobs.index',[
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function (){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id){
    //dd($id);
    $job = Job::find($id);

    //dd($job);

    return view('jobs.show', [
        'job' => $job
    ]);
});

Route::post('/jobs', function (){
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
