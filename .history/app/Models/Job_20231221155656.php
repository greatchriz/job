<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\JobApplication;
use App\Models\Message;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function messages()
    {
        return $this->morphToMany(Message::class, 'messagable');
    }


    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
