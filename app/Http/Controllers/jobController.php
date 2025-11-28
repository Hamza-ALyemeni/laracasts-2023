<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(5);
            return view('jobs.index',[
              'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Job $job)
    {
        //
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
    }

    /**
     * Display the specified resource.
     */
    public function show(job $job)
    {
        //
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job $job)
    {
        
        // if (Auth::guest()){
        //     return redirect('/login');
        // }

        // if ($job->employer->user->isNot(Auth::user())) {
        //    abort(403);
        // }

       // Gate::authorize('edit-job', $job);

        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(job $job)
    {
        //
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric']
        ]);
    
        // dd($id);
        // $job = Job::findOrFail($id);
    
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);
    
        return redirect("/jobs/" . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
