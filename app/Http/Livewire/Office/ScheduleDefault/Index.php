<?php

namespace App\Http\Livewire\Office\ScheduleDefault;

use App\Models\ScheduleDefault;
use App\Models\Tool;
use Livewire\Component;

class Index extends Component
{
    public $schedules;
    public $tool_id;
    public $tool_name;

    public function mount(Tool $tool)
    {
        $this->tool_id = $tool->id;
        $this->tool_name = $tool->name;
        $this->schedules = ScheduleDefault::where('tool_id',$tool->id)->orderBy('date')->orderBy('start')->get();
    }

    public function render()
    {
        return view('livewire.office.schedule-default.index')->layout('layouts.app_office');
    }
}
