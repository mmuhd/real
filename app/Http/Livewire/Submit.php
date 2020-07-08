<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Submit extends Component
{

	public $newEmail;

	public function submitEmail(Request	$request)
    {
        $this->validate(['newEmail' => 'required|email']);
        $submittedEmail = \App\Submit::create([
            'email' => $this->newEmail,
            'submitted_by' => $request->ip(),
            'isScam' => "yes",
            'public' => "yes"
        ]);
        $this->newEmail = '';
        session()->flash('message', 'Email added successfully 👍');
    }

    public function render()
    {
        return view('livewire.submit');
    }
}
