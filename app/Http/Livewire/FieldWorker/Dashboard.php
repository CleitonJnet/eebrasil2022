<?php

namespace App\Http\Livewire\FieldWorker;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.field-worker.dashboard')->layout('layouts.app_fieldworker');
    }
}
