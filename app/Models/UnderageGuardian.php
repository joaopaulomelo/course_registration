<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnderageGuardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_birth',
        'phone',
        'cpf',
        'file_id',
        'nationality_id',
        'kinship_type_id',
        'user_info_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function usuarioInfo()
    {
        return $this->hasOne(UserInfos::class);
    }

    public function nationality()
    {
        return $this->hasOne(Nationality::class);
    }

    public function kinshipType()
    {
        return $this->hasOne(KinshipType::class);
    }

}
