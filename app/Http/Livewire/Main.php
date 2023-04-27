<?php

namespace App\Http\Livewire;

use App\Models\Worlds;
use Livewire\Component;

class Main extends Component
{
    public $worlds;

    public function allWorld()
    {
        $this->worlds = Worlds::all();
    }

    public function render()
    {
        $this->allWorld();

        return view('livewire.main', [
            'worlds' => $this->worlds
        ]);
    }
}
