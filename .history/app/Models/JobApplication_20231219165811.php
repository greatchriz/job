<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\Job;
use App\Models\User;
use Spatie\Activitylog\Traits\LogsActivity;


class JobApplication extends Model
{
    use HasFactory;
    use LogsActivity;

    protected static $logAttributes = ['user_id', 'user_id', 'status'];

    protected static $recordEvents = ['created', 'updated', 'deleted'];

    protected $guarded = [];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
