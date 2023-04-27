<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worlds extends Model
{
    protected $fillable = [
        'new_world', //50
        'short_description', //2000
        'tags',
    ];
}
