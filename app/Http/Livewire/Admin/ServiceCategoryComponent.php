<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ServiceCategoryComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $name, $description,$image,$logo, $active;
    public $search = '';
    public $perPage = 20;
    public $editMode = false;
    protected $listeners = ['delete'];
    public function render()
    {
        return view('livewire.admin.service-category-component',[
            'items'=> ServiceCategory::all()
        ]);
    }

    public function save()
    {
        $this->validate([
            'name'=>'required',
            'description'=>'required|min:10',
        ]);

        if ($this->editMode == true)
        {
            $item = $this->active;
        }else{
            $item = new ServiceCategory();
        }



        $item -> name = $this->name;
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
        $this->active = ServiceCategory::find($k['id']);
    }

    public function delete()
    {
        ServiceCategory::destroy($this->active);
        $this->resetAll();
        $this->emit('deleted');
    }

}
