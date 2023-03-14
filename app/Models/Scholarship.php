<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'registration_start_date',
        'registration_end_date',
        'date_raffle',
        'course_id',
        'amount_vacancy',
        'amount_vacancy_final',
        'scholarship_status_id'

    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function course()
    {
        return $this->hasOne(Course::class);
    }

    public function status()
    {
        return $this->hasOne(ScholarshipStatus::class);
    }

}
