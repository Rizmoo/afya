<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PlansComponent extends Component
{
    public $name, $description, $price, $invoice_period, $invoice_interval,$trail_period,$trail_interval, $active;
    public $editMode= false;
    protected $listeners = ['reset' =>'resetAll','delete'=>'delete'];
    public $search = '';
    public $perPage = 15;
    public function render()
    {
        return view('livewire.admin.plans-component',[
            'plans'=>   app('rinvex.subscriptions.plan')->all()
        ]);
    }
    public function resetAll()
    {
        $this->name = '';
        $this->description = '';
        $this->invoice_period = '';
        $this->invoice_interval = '';
        $this->trail_interval = '';
        $this->trail_period = '';
        $this->price = '';
        $this->resetErrorBag();
        $this->editMode = false;

    }

    public function store()
    {

        app('rinvex.subscriptions.plan')->create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'signup_fee' => 1.99,
            'invoice_period' => (string) $this->invoice_period,
            'invoice_interval' => $this->invoice_interval,
            'trial_period' => (int) $this->trail_period,
            'trial_interval' =>  (string)$this->trail_interval,
            'currency' => 'KES',
        ]);
        $this->emit('created');
        $this->resetAll();
    }

    public function edit($id)
    {
        $plan = app('rinvex.subscriptions.plan')->find($id);
        $this->name = $plan ->name;
        $this->description = $plan ->description;
        $this->invoice_period = $plan ->invoice_period;
        $this->invoice_interval = $plan ->invoice_interval;
        $this->trail_interval = $plan ->trail_interval;
        $this->trail_period = $plan ->trail_period;
        $this->price = $plan ->price;

        $this->editMode = true;
        $this->active = $plan;
    }

    public function update()
    {
        $this->active ->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'signup_fee' => 1.99,
            'invoice_period' => (string) $this->invoice_period,
            'invoice_interval' =>$this->invoice_interval,
//        'trial_period' => (string) $this->trail_period,
//        'trial_interval' => (int)$this->trail_interval,
            'currency' => 'KES',
        ]);
        $this->resetAll();
        $this->emit('created');
    }

    public function setActive($id)
    {
        $this->active = app('rinvex.subscriptions.plan')->find($id);
    }

    public function delete()
    {
        $this->active -> delete();
        $this->resetAll();
        $this->emit('deleted');
    }
}
