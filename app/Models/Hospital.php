<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'title',
        'description',
        'phone_no',
        'map_direction',
        'address',
        'hospital_category_id',
        'property_id',
    ];
}
