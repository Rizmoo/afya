<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class MemberReg extends Component
{
    public $graduation_yr, $profession, $name, $email, $phone_number, $password;
    public function render()
    {
        return view('livewire.auth.member-reg')->layout('layouts.front');
    }
}
