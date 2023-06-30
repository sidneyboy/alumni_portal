<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement_replies extends Model
{
    use HasFactory;

    protected $fillable = [
        'announcements_id',
        'user_id',
        'content',
        'status',
        'user_type',
    ];
}
