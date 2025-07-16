<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyTest extends Model
{
    public function labTests()
    {
        return $this->belongsToMany(LabTest::class);
    }

}
