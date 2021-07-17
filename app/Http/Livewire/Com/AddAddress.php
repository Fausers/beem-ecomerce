<?php

namespace App\Http\Livewire\Com;

use Livewire\Component;

class AddAddress extends Component
{
    public $add;

    public function show()
    {
        $this->add = 1;
    }

    public function hidde()
    {
        $this->add = 0;
    }

    public function render()
    {
        return view('livewire.com.add-address');
    }
}
