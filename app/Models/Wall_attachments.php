<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wall_attachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'wall_id',
        'attachment',
        'status',
        'user_id',
        'user_type',
    ];
}
