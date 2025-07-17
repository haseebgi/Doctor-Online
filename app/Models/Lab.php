<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = ['name', 'location', 'contact'];

    public function labTests()
    {
        return $this->hasMany(LabTest::class);
    }
}
