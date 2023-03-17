<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'mime',
        'path',
        'name',
        'size'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
