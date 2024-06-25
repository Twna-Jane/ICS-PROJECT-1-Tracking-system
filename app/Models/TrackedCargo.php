<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackedCargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight',
        'awbno',
        'status',
        'location'
    ];

}
