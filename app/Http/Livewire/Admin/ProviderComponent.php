<?php

namespace App\Http\Livewire\Admin;

use App\Models\Provider;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProviderComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $name, $description,$cat, $image,$logo, $active, $locations, $email, $phone;
    public $search = '';
    public $perPage = 20;
    public $types;
    public $editMode = false;
    protected $listeners = ['delete'];

    public function mount()
    {
        $this -> types = \App\Models\ProviderType::all();
    }

    public function render()
    {
        return view('livewire.admin.provider-component',[
            'items'=> Provider::with('type')->get()
        ]);
    }


    public function save()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'description'=>'required|min:10',
            'cat'=>'required',
        ]);

        if ($this->editMode == true)
        {
            $item = $this->active;
        }else{
            $item = new Provider();
        }

        $item -> name = $this->name;
        $item -> provider_type_id = $this->cat;
        $item -> email = $this->email;
        $item -> phone_number = $this->phone;
        $item -> description = $this->description;
        $item ->save();

        if ($this->logo)
        {
            $item->addMediaFromString($this->logo->get())
                ->usingFileName($this->logo->getFilename())
                ->toMediaCollection();
        }

        if ($this->editMode == true)
        {
            $this->emit('updated');
        }else
        {
            /*craete user*/

            $user =
            $this->emit('created');
        }

        $this->resetAll();

    }

    public function resetAll()
    {
        $this->name = '';
        $this->description = '';
        $this->email = '';
        $this->phone = '';
        $this->logo = '';
        $this->active = '';
    }

    public function setActive($id)
    {
        $this->active = $id;
    }

    public function edit($k)
    {
        $this->editMode = true;
        $this->name = $k['name'];
        $this->phone = $k['phone_number'];
        $this->email = $k['email'];
        $this->cat = $k['provider_type_id'];
        $this->description = $k['description'];
        $this->active = Provider::find($k['id']);
    }

    public function delete()
    {
        Service::destroy($this->active);
        $this->resetAll();
        $this->emit('deleted');
    }
}
