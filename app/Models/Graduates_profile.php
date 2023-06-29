<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduates_profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'gender',
        'date_of_birth',
        'year_graduated',
        'profile_last_updated',
        'graduate_picture_id',
        'email',
        'password',
        'status',
    ];
}
