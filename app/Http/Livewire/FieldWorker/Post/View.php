<?php

namespace App\Http\Livewire\FieldWorker\Post;

use App\Models\Post;
use Livewire\Component;

class View extends Component
{
    public Post $post;

    public function render()
    {
        return view('livewire.field-worker.post.view')->layout('layouts.app_fieldworker');
    }
}
