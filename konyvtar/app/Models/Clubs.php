<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    protected  $primaryKey = 'club_id';

    protected $fillable = [
        'date',
        'location',
        'max_number',
    ];
}
