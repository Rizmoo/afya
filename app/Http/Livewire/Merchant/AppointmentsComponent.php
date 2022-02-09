<?php

namespace App\Http\Livewire\Merchant;

use App\Models\Appointment;
use App\Models\Provider;
use Livewire\Component;

class AppointmentsComponent extends Component
{
    public $provider_id;
    public function mount($provider)
    {


        $this->provider_id = $provider;


    }
    public function render()
    {
        return view('livewire.merchant.appointments-component',[
            'items'=> Appointment::where('provider_id', $this->provider_id)->get()
        ]);
    }
}
