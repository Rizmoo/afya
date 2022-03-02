<?php

namespace App\Http\Livewire\Front;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.front.categories',[
            'categories'=> Service::take(15)->get()
        ]);
    }
}
