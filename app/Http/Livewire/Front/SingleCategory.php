<?php

namespace App\Http\Livewire\Front;

use App\Models\Provider;
use App\Models\ProviderService;
use App\Models\Service;
use Livewire\Component;

class SingleCategory extends Component
{
    public $cat;
    public function mount(Service $category)
    {
        $this->cat = $category;
    }
    public function render()
    {
        return view('livewire.front.single-category',[
            'providers'=> ProviderService::with('provider')->where('service_id', $this->cat ->id)->get()
        ])->layout('layouts.front');
    }
}
