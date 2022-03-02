<?php

namespace App\Http\Livewire\Front;

use App\Models\Appointment;
use App\Models\User;
use Livewire\Component;

class MakeAppointment extends Component
{
    public $name, $email, $phone, $time, $service, $provider;

    public function mount($provider)
    {
        $this->provider = $provider;
    }
    public function render()
    {
        return view('livewire.front.make-appointment');
    }

    public function book()
    {
        $this->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'time'=> 'required',
        ]);
        /*create customer*/

        $user =  User::firstOrCreate(
            ['email' => $this->email],
            [
                'name' => $this->name,
                'phone_number' => $this->phone
            ]
        );

        $app = new Appointment();
        $app->provider_id = $this->provider->id;
        $app->user_id = $user->id;
        $app->time = $this->time;
        $app -> save();

        $this->clear();

        $this->emit('apnt');

    }

    public function clear()
    {
        $this->clearValidation();
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->time = null;
    }
}
