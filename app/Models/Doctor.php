<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'pmdc_verified',
        'specialization',
        'degrees',
        'experience',
        'tags',
        'clinic_info',
        'availability',
        'fee',
        'profile_image',
    ];
}
