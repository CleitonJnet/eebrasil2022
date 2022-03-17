<?php

namespace App\Http\Livewire\Office\ScheduleDefault;

use App\Models\ScheduleDefault;
use App\Models\Tool;
use App\Models\Unity;
use Livewire\Component;

class Create extends Component
{


    public $tool_id;
    public $tool_name;
    public $unity;
    public $unities;
    public $intervals;
    public $date;
    public $start;
    public $end;

    public function mount(Tool $tool)
    {
        $this->tool_id      = $tool->id;
        $this->tool_name    = $tool->name;
        $this->unities      = Unity::where('tool_id',$this->tool_id)->orderBy('order')->get();
        $this->intervals    = Unity::where('order',null)->orderBy('order')->get();
    }

    public function scheduleCreate()
    {
        ScheduleDefault::create([
            'unity_id' => $this->unity,
            'date' => $this->date,
            'start' => $this->start,
            'end' => $this->end,
            'tool_id' => $this->tool_id,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.schedule-defaults.index',$this->tool_id);
    }

    public function render()
    {
        return view('livewire.office.schedule-default.create')->layout('layouts.app_office');
    }
}
