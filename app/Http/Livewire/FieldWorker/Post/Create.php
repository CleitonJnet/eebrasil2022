<?php

namespace App\Http\Livewire\FieldWorker\Post;

use Livewire\Component;

class Create extends Component
{
    public $author;
    public $status;
    public $moderate;
    public $subject;
    public $text;
    public $date;
    public $countLetter;

    public function render()
    {
        return view('livewire.field-worker.post.create')->layout('layouts.app_fieldworker');
    }
}
