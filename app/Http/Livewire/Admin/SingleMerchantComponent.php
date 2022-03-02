<?php

namespace App\Http\Livewire\Admin;

use App\Models\Provider;
use Livewire\Component;

class SingleMerchantComponent extends Component
{
    public $provider;
    public function mount($provider)
    {
        $this ->provider = Provider::where('uuid', $provider) -> first();

    }
    public function render()
    {

        return view('livewire.admin.single-merchant-component');
    }
}
