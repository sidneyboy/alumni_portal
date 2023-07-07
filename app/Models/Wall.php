<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wall extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'body',
        'status',
        'user_type',
    ];
    public function attachments()
    {
        return $this->hasMany('App\Models\Wall_attachments', 'wall_id');
    }

    public function attachments_limit_3()
    {
        return $this->hasMany('App\Models\Wall_attachments', 'wall_id')->skip(1)->limit(3);
    }

    public function attachments_one()
    {
        return $this->hasOne('App\Models\Wall_attachments', 'wall_id')->take(1);
    }

    public function admin_photos()
    {
        return $this->hasMany('App\Models\Wall_attachments', 'wall_id')->orderBy('id', 'desc')->take(8);
    }

    public function wall_replies()
    {
        return $this->hasMany('App\Models\Wall_replies', 'wall_id');
    }

    public function user_admin()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
