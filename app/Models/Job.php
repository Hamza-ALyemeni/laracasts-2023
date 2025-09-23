<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Arr;

class Job extends Model
{
    //
    public static function allJobsArray(){
        return [
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
            ]
        ];
    }

    public static function findJob(int $id) {
        $job = Arr::first(static::allJobsArray(), function ($job) use ($id) {
            return $job['id'] == $id;
        });

        if (!$job) {
            abort(404);
        }
        return $job;
    }

}
