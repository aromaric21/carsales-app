<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'models';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'brand_id'
    ];
    use HasFactory;
}
