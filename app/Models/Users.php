<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

protected $fillable = ["name"];

    public function directions(){
        return $this->hasMany(Direction::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedidos::Class);
    }
}