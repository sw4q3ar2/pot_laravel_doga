<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberships extends Model
{
    protected  $primaryKey = 'member_id';

    protected $fillable = [
        'club_id',
        'user_id'
    ];
}
