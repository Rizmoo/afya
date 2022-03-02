<?php

namespace App\Http\Livewire\Front;

use App\Models\Provider;
use App\Models\ProviderType;
use Livewire\Component;

class TypesPage extends Component
{
    public $type;
    public $providers;
    public function mount(ProviderType $type)
    {

        $this->type = $type;
        $this->providers = Provider::where('provider_type_id', $type->id)->get();

    }
    public function render()
    {
        return view('livewire.front.types-page')->layout('layouts.front');
    }
}
