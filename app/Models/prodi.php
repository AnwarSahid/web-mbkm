<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'prodi'
    ];

    public function prodis()
    {
        return $this->hasOne(Fakultas::class, 'id', 'fakultas_id');
    }
}
