<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $job = Job::all();
    return view('welcome');
});

// index
Route::get('/jobs', function (){
    $jobs = Job::with('employer')->latest()->paginate(5);
    return view('jobs.index',[
        'jobs' => $jobs
    ]);
});

//create
Route::get('/jobs/create', function (){
    return view('jobs.create');
});

//show
Route::get('/jobs/{id}', function ($id){
    //dd($id);
    $job = Job::find($id);

    //dd($job);

    return view('jobs.show', [
        'job' => $job
    ]);
});

//store
Route::post('/jobs', function (){
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//edit
Route::get('/jobs/{id}/edit', function ($id){
    //dd($id);
    $job = Job::find($id);

    //dd($job);

    return view('jobs.edit', [
        'job' => $job
    ]);
});

//update
Route::patch('/jobs/{id}', function ($id){
    
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric']
    ]);

    //dd($id);
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect("/jobs/" . $job->id);
});


//delete
Route::delete('/jobs/{id}', function ($id){

    //dd($id);
    
    $job = Job::findOrFail($id);

    $job->delete();

    return redirect("/jobs");

});

Route::get('/contact', function () {
    return view('contact');
});
