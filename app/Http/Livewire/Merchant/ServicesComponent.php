<?php

namespace App\Http\Livewire\Merchant;

use App\Models\Provider;
use App\Models\ProviderService;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $merchant, $services, $provider_id;
    public $service_id, $price, $active;
    public function mount($merchant)
    {
        $this->merchant = Provider::find($merchant);
        $this->provider_id = $this->merchant -> id;
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.merchant.services-component',[
            'items'=> ProviderService::where('provider_id', $this->provider_id)->get()
        ]);
    }

    public function save()
    {
        $this->validate([
            'price'=>'required',
            'service_id'=>'required',
        ]);

        $sev = new ProviderService();
        $sev -> service_id = $this->service_id;
        $sev -> provider_id = $this->provider_id;
        $sev -> price = $this->price;
        $sev->save();

        $this->emit('created');

    }

    public function toggleActive($item)
    {
        $state = $item['active'];
        if ($state == true)
        {
            $k = false;
        }else{
            $k = true;
        }
        DB::table('provider_services')->where('id', $item['id'])->update(['active' => $k]);
        $this->emit('message','Updated');
    }
}
