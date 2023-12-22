<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\Job;
use App\Models\User;

class JobApplication extends Model
{


    use HasFactory;

    protected $guarded = [];


    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function confirmApplication()
    {

        $this->update(['status' => 'accepted']);
    }

    public function rejectApplication()
    {

        $this->update(['status' => 'rejected']);
    }

}
