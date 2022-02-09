<?php

namespace App\Http\Livewire\Front;

use App\Models\Provider;
use Livewire\Component;
use Livewire\WithPagination;

class ProvidersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.front.providers-component',[
            'providers'=> Provider::latest()->simplePaginate(10)
        ])->layout('layouts.front');
    }
}
