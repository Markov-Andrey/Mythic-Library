<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'title',
        'short_description',
    ];

    public static function tagInfo($ids)
    {
        return self::whereIn('id', $ids)->get(['title', 'short_description']);
    }
}
