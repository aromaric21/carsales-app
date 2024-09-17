<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $primarykey = 'id';
    protected $fillable = [
        'title',
        'description',
        'model_id',
        'member_id',
         'fuel_type',
         'year',
         'mileage',
         'price',
         'photo',
    ];
    use HasFactory;
}
