<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class DoctorsComponent extends Component
{
    public function render()
    {
        return view('livewire.front.doctors-component')->layout('layouts.front');
    }
}
