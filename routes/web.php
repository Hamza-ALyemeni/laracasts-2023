<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Senior Laravel Developer',
                'description' => 'We are looking for a Senior Laravel Developer with 5+ years of experience.',
                'salary' => '80,000 - 120,000 USD',
            ],
            [
                'id' => 2,
                'title' => 'Senior React Developer',
                'description' => 'We are looking for a Senior React Developer with 5+ years of experience.',
                'salary' => '90,000 - 140,000 USD',
            ],
            [
                'id' => 3,
                'title' => 'Desiger UI/UX',
                'description' => 'We are looking for a Desiger UI/UX with 5+ years of experience.',
                'salary' => '70,000 - 100,000 USD',
            ],
            
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    //dd($id);
    $jobs = [
        [
            'id' => 1,
            'title' => 'Senior Laravel Developer',
            'description' => 'We are looking for a Senior Laravel Developer with 5+ years of experience.',
            'salary' => '80,000 - 120,000 USD',
        ],
        [
            'id' => 2,
            'title' => 'Senior React Developer',
            'description' => 'We are looking for a Senior React Developer with 5+ years of experience.',
            'salary' => '90,000 - 140,000 USD',
        ],
        [
            'id' => 3,
            'title' => 'Desiger UI/UX',
            'description' => 'We are looking for a Desiger UI/UX with 5+ years of experience.',
            'salary' => '70,000 - 100,000 USD',
        ],
        
    ];
    $job = \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });

    //dd($job);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
