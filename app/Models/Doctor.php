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
        'hospital_id',    // Foreign key to hospitals table
        'category_id',    // Foreign key to categories table
        'sponsored',      // ✅ New field for sponsored doctors
    ];

    // Relationship: Doctor belongs to a Category
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    // Relationship: Doctor belongs to a Hospital
    public function hospital()
    {
        return $this->belongsTo(\App\Models\Hospital::class);
    }
}
