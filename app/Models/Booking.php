<?php

// app/Models/Booking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
        protected $fillable = [
        'lab_test_id',
        'patient_name',
        'patient_number',
        'lab_city',
        'age',
        'prescription',
    ];

    public function labTest()
    {
        return $this->belongsTo(LabTest::class);
    }
}
