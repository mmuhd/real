<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmailStat extends Component
{
    public function render()
    {
    	return view('livewire.email-stat', [
            'emailCount' => \App\Submit::where('isScam', 'yes')->count(),
        ]);

    }
}
