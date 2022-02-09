<?php

namespace App\Http\Livewire\Front;

use App\Models\Article;
use Livewire\Component;

class ListBlogs extends Component
{
    public function render()
    {
        return view('livewire.front.list-blogs',[
            'articles'=> Article::take(5)->get()
        ]);
    }
}
