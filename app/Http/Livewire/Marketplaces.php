<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Cart;

class Marketplaces extends Component
{
	public $wbname;

	protected $listeners = [
		'wbname' => 'add',
	];

	public function add($wbname) {

		$this->wbname = $wbname;

		$web = Website::where('name', $this->wbname)->first();

		Cart::create([
			'user_id' => auth()->user()->id,
			'website_id' => $web->id,
			'quantity' => 1
		]);
	}


    public function render()
    {
        return view('livewire.marketplaces');
    }
}
