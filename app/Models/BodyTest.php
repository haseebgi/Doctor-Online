<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyTest extends Model
{
    protected $fillable = ['name', 'original_price'];

    public function labTests()
    {
        return $this->belongsToMany(LabTest::class);
    }
}

