<?php

namespace App\Http\Livewire\Auth;


use App\Models\ProviderType;
use Livewire\Component;
use Rinvex\Subscriptions\Models\Plan;

class ProviderReg extends Component
{
    public $plan, $password_confirmation, $password, $company_name, $company_email, $name, $email, $phone, $website, $fb, $bio;
    public $address, $longitude, $latitude, $county, $type='merchant', $provider_type, $provider_types;

    public function mount()
    {
        if (!(request()->get('plan') && Plan::whereSlug(request()->get('plan'))->first())) {
            return redirect()->route('auth.plans');
        }

        $this->plan = Plan::whereSlug(request()->get('plan'))->first()->id;
        $this->provider_types = ProviderType::all();
    }
    public function render()
    {

        return view('livewire.auth.provider-reg')->layout('layouts.front');
    }
}
