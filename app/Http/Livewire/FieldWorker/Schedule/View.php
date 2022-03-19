<?php

namespace App\Http\Livewire\FieldWorker\Schedule;

use Livewire\Component;

class View extends Component
{
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function render()
    {
        return view('livewire.field-worker.schedule.view')->layout('layouts.app_fieldworker');
    }
}
