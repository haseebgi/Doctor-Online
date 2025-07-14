<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'qualifications',
        'experience_years',
        'reviews',
        'satisfaction',
        'video_fee',
        'hospital_fee',
        'hospital_name',
        'hospital_location',
        'latitude',
        'longitude',
        'image',
        'hospital_id',    // ✅ added relationship field
        'category_id',    // ✅ added relationship field
    ];

    // ✅ Doctor belongs to a Category
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    // ✅ Doctor belongs to a Hospital
    public function hospital()
    {
        return $this->belongsTo(\App\Models\Hospital::class);
    }
}
