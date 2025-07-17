<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['lab_id', 'test_name', 'price'];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function bodyTests()
    {
        return $this->belongsToMany(BodyTest::class);
    }
}
