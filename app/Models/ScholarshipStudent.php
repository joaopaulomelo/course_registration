<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'scholarship_id',
        'user_id',
        'contemplated'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function usuario()
    {
        return $this->hasOne(User::class);
    }

    public function scholarship()
    {
        return $this->hasMany(ScholarshipStatus::class);
    }
}
