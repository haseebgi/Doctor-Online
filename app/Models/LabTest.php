<?php

// app/Models/LabTest.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['lab_id', 'test_name', 'price', 'discount'];

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
