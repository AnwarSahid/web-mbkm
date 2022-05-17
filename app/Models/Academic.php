<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'university',
        'accreditation_university',
        'faculty',
        'study_program',
        'accreditation_study_program',
        'educational_degree',
        'semester',
        'ipk',
        'sks',
        'scan_transcript',
        'scan_krs',
    ];

    public function getfakultas()
    {
        return $this->hasOne(Fakultas::class, 'id', 'faculty');
    }
    public function getprodi()
    {
        return $this->hasOne(prodi::class, 'id', 'study_program');
    }
}
