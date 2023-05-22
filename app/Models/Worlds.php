<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worlds extends Model
{
    protected $fillable = [
        'new_world',
        'short_description',
        'long_description',
        'tags',
        'world_name_slug',
    ];

    /**
     * Relationship with tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }

    /**
     * Accessor for tags attribute.
     *
     * @param $value
     * @return array
     */
    public function getTagsAttribute($value)
    {
        $tagIds = explode(",", $value);
        $tags = Tags::tagInfo($tagIds);

        return $tags;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function allWorld()
    {
        return Worlds::select(
            'new_world',
            'tags',
            'world_name_slug',
            'short_description',
            'created_at',
            'updated_at')
            ->get();
    }

    /**
     * @param $world_name_slug
     * @return mixed
     */
    public static function slug($world_name_slug)
    {
        return Worlds::where('world_name_slug', $world_name_slug)->first();
    }
}
