<?php

namespace App\Http\Livewire\Office\ScheduleDefault;

use Livewire\Component;

class View extends Component
{
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function render()
    {
        return view('livewire.office.schedule-default.view')->layout('layouts.app_office');
    }
}
