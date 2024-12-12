<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    use HasFactory;

    protected $table = 'product_rating';

    protected $fillable = [
        'product_id',
        'customer_id',
        'overall_rating',
        'quality_rating',
        'value_rating',
        'price_rating',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function getAverageRating()
    {
        return ($this->overall_rating + $this->quality_rating + $this->value_rating + $this->price_rating) / 4;
    }
}


