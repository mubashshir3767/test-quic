<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',  // Product name
        'description',  // Product description
        'price',  // Product price
        // Add other product fields as needed
    ];
}
