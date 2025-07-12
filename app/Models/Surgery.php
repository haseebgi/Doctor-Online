<?php

// app/Models/Surgery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'discount_label',
        'subtext',
        'image',
        'button',
    ];
}
