<?php

namespace App\Http\Livewire\Office\Schedule;

use App\Models\Schedule;
use App\Models\Training;
use Livewire\Component;

class Index extends Component
{
    public Training $training;

    public function mount()
    {
        $this->tool_id = $this->training->tool->id;
        $this->tool_name = $this->training->tool->name;
        $this->schedules = $this->training->schedules()->orderBy('date')->orderBy('start')->get();
    }

    public function render()
    {
        return view('livewire.office.schedule.index')->layout('layouts.app_office');
    }
}
