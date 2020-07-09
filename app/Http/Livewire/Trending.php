<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Trending extends Component
{
	

    public function render()
    {
        return view('livewire.trending', [
            'trends' => \App\Formats::where('isScam', 'yes')->latest()->paginate(2),
        ]);
    }
}
