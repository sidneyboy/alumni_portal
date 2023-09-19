<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career_path extends Model
{
    use HasFactory;

    protected $fillable = [
        'career',
        'description',
        'from',
        'present',
        'user_id',
        'file',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
