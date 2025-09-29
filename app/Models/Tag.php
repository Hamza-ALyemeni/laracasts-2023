<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory;

    public function jobs(){

        return $this->belongsToMany(Job::class, foreignPivotKey: 'tag_id', relatedPivotKey: 'job_listing_id');
  
     }

     public function posts(){

        return $this->belongsToMany(Job::class);
  
     }
}
