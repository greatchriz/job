<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Custom\ActivitylogOptions;
USE App\Models\Job;
use App\Models\User;


class JobApplication extends Model
{
    use HasFactory;
    use LogsActivity;

    protected static $logAttributes = ['user_id', 'user_id', 'status'];

    protected static $recordEvents = ['created', 'updated', 'deleted'];

    protected $guarded = [];

    public function getActivitylogOptions()
    {
        return ActivitylogOptions::defaults()
            ->logOnly(['user_id', 'status']);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
