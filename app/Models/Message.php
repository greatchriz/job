<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Job;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

     /**
     * Get all of the posts that are assigned this tag.
     */
    public function users()
    {
        return $this->morphedByMany(User::class, 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function jobs()
    {
        return $this->morphedByMany(Job::class, 'taggable');
    }
}
