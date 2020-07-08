<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
	public $searchNewEmail;
	//public $emails;

	public function searchEmail()
	{
		# code...
		$this->validate(['searchNewEmail' => 'required|email']);

		//$emails = \App\Search::find($searchNewEmail);
		
		$searchNewEmail = $this->searchNewEmail;

		$emails = \App\Search::where('email', '=', $searchNewEmail)->count();

		if ($emails != null) {
			# code...
			session()->flash('danger_message', '<b>Danger!</b> </br> This Email Has Been Artributed to Scam ' .$emails.' Time(s). </br> Therefore you should avoid any business </br> dealing with the bearer of the email!' );
		}

		else {

			session()->flash('warning_message', 'This Email has not been reported </br> as a potential Scam/Fraud. However, if you suspect it </br> to be involved in Scam/Fraud Please ' );

		}
	}

    public function render()
    {
        return view('livewire.search');
    }
}
