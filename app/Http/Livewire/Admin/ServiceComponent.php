<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ServiceComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $name, $description,$cat, $image,$logo, $active;
    public $search = '';
    public $perPage = 20;
    public $cats;
    public $editMode = false;
    protected $listeners = ['delete'];

    public function mount()
    {
        $this->cats = ServiceCategory::all();
    }
    public function render()
    {
        return view('livewire.admin.service-component',[
            'items'=> Service::with('category')->get()
        ]);
    }

    public function save()
    {
        $this->validate([
            'name'=>'required',
            'description'=>'required|min:10',
            'cat'=>'required',
        ]);

        if ($this->editMode == true)
        {
            $item = $this->active;
        }else{
            $item = new Service();
            $item ->uuid = Str::uuid();
        }



        $item -> name = $this->name;
        $item -> service_category_id = $this->cat;
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
            $this->emit('created');
        }

        $this->resetAll();

    }

    public function resetAll()
    {
        $this->name = '';
        $this->description = '';
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
        $this->description = $k['description'];
        $this->active = Service::find($k['id']);
    }

    public function delete()
    {
        Service::destroy($this->active);
        $this->resetAll();
        $this->emit('deleted');
    }

}
