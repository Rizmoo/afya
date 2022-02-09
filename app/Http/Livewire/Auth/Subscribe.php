<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Rinvex\Subscriptions\Models\Plan;

class Subscribe extends Component
{
    public function mount()
    {
        $this->plans = Plan::all();
    }
    public function render()
    {
        return view('livewire.auth.subscribe')->layout('layouts.front');
    }
}
