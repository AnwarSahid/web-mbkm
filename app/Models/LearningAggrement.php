<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningAggrement extends Model
{
    use HasFactory;
    protected $fillable = [
        'sks',
        'learning_aggrement',
        'id',
    ];
}
