<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Order extends Model
{
    //
  
 protected $fillable = [
    'medicine_name',
    'prescription',
    'address',
    'phone_number',
    'patient_name',
    'city',
    'status', // Add this line
];


}
