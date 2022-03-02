<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class DoctorComponent extends Component
{
    public function render()
    {
        return view('livewire.front.doctor-component')->layout('layouts.front');
    }
}
