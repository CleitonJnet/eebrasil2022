<?php

namespace App\Http\Livewire\FieldWorker\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth()->user()->id;
    }

    public function render()
    {
        $posts = Post::where('user_id',$this->user)->paginate(10);
        return view('livewire.field-worker.post.index',compact('posts'))->layout('layouts.app_fieldworker');
    }
}
