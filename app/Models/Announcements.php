<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
        'user_id',
        'status',
    ];

    public function attachments()
    {
        return $this->hasMany('App\Models\Announcements_attachments', 'announcements_id')->skip(1)->limit(3);
    }

    public function attachments_one()
    {
        return $this->hasOne('App\Models\Announcements_attachments', 'announcements_id')->take(1);
    }

    public function admin_photos()
    {
        return $this->hasMany('App\Models\Announcements_attachments', 'announcements_id')->orderBy('id','desc')->take(8);
    }

    public function announcement_reply()
    {
        return $this->hasMany('App\Models\Announcement_replies', 'announcements_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
