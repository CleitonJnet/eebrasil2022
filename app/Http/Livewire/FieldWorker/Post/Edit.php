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
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function remove()
    {
        session()->flash('message','Registro removido com sucesso!');

        $this->post->delete();

        $this->redirectRoute('fieldworker.posts.index');
    }

    public function render()
    {
        return view('livewire.field-worker.post.edit')->layout('layouts.app_fieldworker');
    }
}
