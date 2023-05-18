<?php


namespace App\Http\Controllers;


use App\Models\Worlds;

class WorldController extends Controller
{
    public function index($world_name_slug)
    {
        $world = Worlds::where('world_name_slug', $world_name_slug)->first();

        return view('world', compact('world'));
    }
}
