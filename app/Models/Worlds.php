<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worlds extends Model
{
    protected $fillable = [
        'new_world',
        'short_description',
        'tags',
        'world_name_slug',
    ];

    /**
     * Accessor for tags attribute.
     *
     * @param $value
     * @return array
     */
    public function getTagsAttribute($value)
    {
        return $this->trimTags($value);
    }

    /**
     * Trim tags.
     *
     * @param $tags
     * @return array
     */
    private function trimTags($tags)
    {
        $trimmedTags = explode(",", $tags);
        $trimmedTags = array_map('trim', $trimmedTags);

        return $trimmedTags;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function allWorld()
    {
        return Worlds::all();
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
