<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
protected $fillable = [
    'name', 'designation', 'qualifications', 'experience_years', 'reviews',
    'satisfaction', 'video_fee', 'hospital_fee', 'hospital_name', 'hospital_location', 'image'
];


}
