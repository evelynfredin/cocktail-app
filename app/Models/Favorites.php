<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;
    protected $table = 'user_drink';

    protected $fillable = [
        'user_id',
        'drink_id'
    ];
}
