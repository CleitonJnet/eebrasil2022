<?php

namespace App\Http\Livewire\FieldWorker\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public Post $post;

    public $author;
    public $status;
    public $moderate;
    public $subject;
    public $text;
    public $date;

    public function render()
    {
        return view('livewire.field-worker.post.edit')->layout('layouts.app_fieldworker');
    }
}
