<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class FormInput extends Model
{
    use HasFactory;

    protected $guarded = [];

    //create a mutuator for the options to convert array to string
    protected function options(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_encode($value),
            set: fn ($value) => json_decode($value),
        );
    }

}
