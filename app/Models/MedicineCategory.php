<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    protected $fillable = ['company_name', 'brand_name'];

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
