<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Format extends Component
{
    public $newFormat;
	public $heading;

	public function submitFormat(Request  $request)
    {
        $this->validate(['newFormat' => 'required|min:6']);
        $this->validate(['heading' => 'required|min:6']);
        $submittedEmail = \App\Formats::create([
            'format' => $this->newFormat,
            'heading' => $this->heading,
            'submitted_by' => $request->ip(),
            'isScam' => "yes",
            'public' => "yes"
        ]);
        $this->newFormat = '';
        $this->heading = '';
        
        session()->flash('message', 'Format submitted successfully 👍');
    }

    public function render()
    {
        return view('livewire.format');
    }
}
