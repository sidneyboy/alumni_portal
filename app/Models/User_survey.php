<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'survey_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function details()
    {
        return $this->hasMany('App\Models\User_survey_details', 'user_survey_id');
    }

    public function admin_survey()
    {
        return $this->belongsTo('App\Models\Survey', 'survey_id');
    }
}
