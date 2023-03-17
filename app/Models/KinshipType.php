<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinshipType extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
