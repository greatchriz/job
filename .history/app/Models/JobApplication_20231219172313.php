<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
USE App\Models\Job;
use App\Models\User;

class JobApplication extends Model
{


    use HasFactory;
    use LogsActivity;

    protected $fillable = ['name', 'text'];

    protected static $logAttributes = ['name', 'text'];

    protected static $logOnlyDirty = true;

    protected $guarded = [];


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
        // Return an array of options for activity logging
        // Example: return ['log_only_dirty' => true];
    }
}
