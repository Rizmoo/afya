<?php

namespace App\Http\Livewire\Front;

use App\Models\Provider;
use Livewire\Component;

class ProviderProfileComponent extends Component
{
    public Provider $provider;
    public function mount(Provider $provider)
    {
        $this->provider = $provider;
    }
    public function render()
    {
        return view('livewire.front.provider-profile-component')->layout('layouts.front');
    }
}
