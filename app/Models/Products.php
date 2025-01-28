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
    "category",
    "colors", 
    "image",
    "sizes"];

    protected $casts = [
        "colors" => "array",  
        "sizes" => "array"
    ];

    protected $attributes = [
        "description" => "Without description",
        "image" => "https://www.edelar.com.ar/static/theme/images/sin_imagen.jpg",
        "price" => 0,
        "category" => "Camisa",
        "discount" => 0,
        "is_active" => true,
        "colors" => "[]",
        "sizes" => "[]"
    ];

    public function user(){
        return $this->hasMany(Users::class);
    }
}
