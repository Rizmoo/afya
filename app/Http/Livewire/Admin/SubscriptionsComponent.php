<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subscription;
use Livewire\Component;

class SubscriptionsComponent extends Component
{
    public $search, $perPage;
    public function render()
    {
        return view('livewire.admin.subscriptions-component',[
            'subscriptions' =>Subscription::all()
        ]);
    }

}
