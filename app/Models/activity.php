<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $fillable = [
        'activity',
        'title',
        'date',
        'venue',
        'facilitator',
        'costoftraining',
        'status',
        
    ];

    protected $casts = [
        'date' => 'date:Y-m-d',
    ];

}
