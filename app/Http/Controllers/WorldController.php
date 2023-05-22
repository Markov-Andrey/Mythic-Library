<?php


namespace App\Http\Controllers;


use App\Models\Worlds;

class WorldController extends Controller
{
    public function index()
    {
        $worlds = Worlds::allWorld();

        return view('index', compact('worlds'));
    }

    public function world($world_name_slug)
    {
        $world = Worlds::slug($world_name_slug);

        return view('world', compact('world'));
    }
}
