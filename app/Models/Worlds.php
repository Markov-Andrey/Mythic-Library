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
        'world_name_slug',
    ];

    public static function allWorld()
    {
        return Worlds::all();
    }

    public static function slug($world_name_slug)
    {
        return Worlds::where('world_name_slug', $world_name_slug)->first();
    }
}
