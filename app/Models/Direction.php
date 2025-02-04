<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = ["street", "user_id"];

    public function user(){
        return $this->belongsTo(Users::class);
    }
}
