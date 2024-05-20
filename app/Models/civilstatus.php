<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class civilstatus extends Model
{
    use HasFactory;
    protected $table = 'civilstatus';
    protected $fillable = [
        'civilstatus',
        'optionstatus'
    ];

}