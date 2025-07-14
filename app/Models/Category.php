<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // ✅ One category has many doctors
    public function doctors()
    {
        return $this->hasMany(\App\Models\Doctor::class);
    }

    // ✅ (Optional) If hospitals are also categorized using this same table
    public function hospitals()
    {
        return $this->hasMany(\App\Models\Hospital::class, 'hospital_category_id');
    }
}
