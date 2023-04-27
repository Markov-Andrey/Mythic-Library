<?php


namespace App\Actions;


class responseProcessing
{
    public static function Process($text)
    {
        //$text = self::Separation($text);


        return $text;
    }

    private static function Separation($text)
    {
        $array = [];
        $text = explode(';', $text);

        foreach ($text as $item) {

            $i = explode(':', $item);

            $key = $i[0];
            $value = $i[1];

            $array[$key] = $value;
        }


        return $array;
    }
}
