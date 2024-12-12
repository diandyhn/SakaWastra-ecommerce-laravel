<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'base_rate',
        'weight_rate',
        'max_weight',
        'estimated_delivery_time',
    ];

    protected $casts = [
        'base_rate' => 'float',
        'weight_rate' => 'float',
        'max_weight' => 'float',
    ];
}