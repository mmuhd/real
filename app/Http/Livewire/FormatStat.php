<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormatStat extends Component
{
    public function render()
    {
        return view('livewire.format-stat', [
            'formatCount' => \App\Formats::where('isScam', 'yes')->count(),
        ]);

    }
}
