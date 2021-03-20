<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Heading2 extends Component
{
	public $site;
	public $currentlySite;

	public function mount($site, $currentlySite) {

		$this->site = ucwords($site);
		$this->currentlySite = ucwords($currentlySite);
	}

    public function render()
    {
        return view('livewire.heading2');
    }
}
