<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_quetions extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_id',
        'question',
        'survey_id',
    ];
}
