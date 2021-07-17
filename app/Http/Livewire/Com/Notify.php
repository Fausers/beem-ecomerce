<?php

namespace App\Http\Livewire\Com;

use Livewire\Component;

class Notify extends Component
{
    protected $listeners = ['Notify' => 'notification'];

    public function notification()
    {
        session()->flash('flash_success', 'Yay it works!');
    }

    public function render()
    {
        return view('livewire.com.notify');
    }
}
