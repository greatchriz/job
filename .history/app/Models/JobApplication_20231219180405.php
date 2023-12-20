<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\Job;
use App\Models\User;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;



class JobApplication extends Model
{

    use LogsActivity;
    use HasFactory;

    protected $guarded = [];
    protected static $logAttributes = ['job_id', 'status'];



    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getActivitylogOptions()
    {
        return LogOptions::defaults()
            ->useLogName('job_applications');

    }
}
