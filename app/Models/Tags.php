<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'title',
        'short_description',
    ];

    public static function tagInfo($tagIds)
    {
        return self::whereIn('id', $tagIds)->get(['title', 'short_description']);
    }


}
