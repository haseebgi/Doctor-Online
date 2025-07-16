<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'email'];

    public function tests()
    {
        return $this->hasMany(LabTest::class);
    }
}
