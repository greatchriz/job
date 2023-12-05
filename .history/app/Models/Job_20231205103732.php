<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\JobApplication;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
