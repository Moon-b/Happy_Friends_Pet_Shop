<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    // protected $gaurded=[];
    protected $fillable=['pet_type','age','life_span','height','weight','breed','size','color'];
}
