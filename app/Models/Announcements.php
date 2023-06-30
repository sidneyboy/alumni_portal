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
}
