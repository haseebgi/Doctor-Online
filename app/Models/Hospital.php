<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'title',
        'description',
        'phone_no',
        'address',
        'location',
        'latitude',
        'longitude',
        'hospital_category_id',
        'property_id',
    ];

    // ✅ One hospital has many doctors
    public function doctors()
    {
        return $this->hasMany(\App\Models\Doctor::class);
    }

    // ✅ Hospital belongs to a hospital category
    public function hospitalCategory()
    {
        return $this->belongsTo(\App\Models\HospitalCategory::class, 'hospital_category_id');
    }

    // (Optional) If you want to add relationship with property
    public function property()
    {
        return $this->belongsTo(\App\Models\Property::class);
    }
}
