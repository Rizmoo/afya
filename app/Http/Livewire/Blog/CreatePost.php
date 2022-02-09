<?php

namespace App\Http\Livewire\Blog;

use App\Models\Article;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;
    public $title, $image, $state, $message;
    public function render()
    {
        return view('livewire.blog.create-post');
    }

    public function save()
    {

        $this->validate([
            'message' => 'required',
            'image' => 'required',
            'title' => 'required',
        ]);



      $art =  Article::create([
            'title' => $this->title,
            'body' => $this->message
        ]);



        return redirect()->route('blogs');
    }
}
