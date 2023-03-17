<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_birth',
        'phone',
        'cpf',
        'display_photo',
        'file_id',
        'nationality_id',
        'user_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function nationality()
    {
        return $this->hasOne(Nationality::class);
    }
}
