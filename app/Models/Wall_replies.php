<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wall_replies extends Model
{
    use HasFactory;

    protected $fillable = [
        'wall_id',
        'user_id',
        'content',
        'status',
        'user_type',
    ];

    public function user_admin()
    {
        return $this->belongsTo('App\Models\User', 'user_id')->select('name', 'profile_picture');
    }

    public function user_regular()
    {
        return $this->belongsTo('App\Models\Graduates_profile', 'user_id');
    }
}
