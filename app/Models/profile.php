<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{

    use HasFactory;
    public $table = "profile";
    protected $fillable = [
        'name', 'email','phone','marks','price','city'
    ];
}
