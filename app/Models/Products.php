<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ["name", 
    "description", 
    "price",
    "discount",
    "is_active",
    "colors", 
    "sizes"];

    protected $casts = [
        "colors" => "array",  
        "sizes" => "array"
    ];

    protected $attributes = [
        "description" => "Without description",
        "price" => 0,
        "discount" => 0,
        "is_active" => true,
        "colors" => "[]",
        "sizes" => "[]"
    ];
}
