<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Member extends Model
{
    protected $table = 'members';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'active',
        'role',
        'join_date'
    ];
    use HasFactory;
}
