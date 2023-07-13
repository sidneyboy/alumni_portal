<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function survey_details()
    {
        return $this->hasMany('App\Models\Survey_quetions', 'survey_id');
    }
}
