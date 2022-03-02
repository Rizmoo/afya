<?php

namespace App\Http\Livewire\Front;

use App\Models\ProviderType;
use Livewire\Component;

class Providertypes extends Component
{
    public function render()
    {
        return view('livewire.front.providertypes',[
            'types' => ProviderType::latest()->take(30)->get()
        ]);
    }
}
