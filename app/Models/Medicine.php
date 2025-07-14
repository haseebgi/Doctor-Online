<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
     protected $fillable = [
    'name',
    'description',
    'price',
    'image',
    'uses',
    'dosage',
    'warnings',
    'precautions',
    'side_effects',
    'packaging',
    'prescription_required',
    'expert_advice',
    'faq',
    'disclaimer',
    'manufacturer',
    'generic_name',
    'formula',
    'drug_class',
    'medicinal_form'
];

}
