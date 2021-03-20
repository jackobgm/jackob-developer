<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Header extends Component
{
    public $numCarts;

    public function mount(){
        if (auth()->user() == null) {
            $this->numCarts = 0;
        } else {

            $carts = Cart::where('user_id', auth()->user()->id)->get();
    
            $this->numCarts = sizeof($carts);
        }
    }

    public function render()
    {
        return view('livewire.header');
    }
}
