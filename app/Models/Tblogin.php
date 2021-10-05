<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblogin extends Model
{
    use HasFactory;

    // protected $table = 'dlfkdsjlfj';
    // protected $primarykey = 'userid';
    // public $timestamp = false;

    protected $fillable = [
        'userid',
        'email',
        'level'
    ];

}
