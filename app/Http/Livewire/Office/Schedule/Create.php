<?php

namespace App\Http\Livewire\Office\Schedule;

use App\Models\Schedule;
use App\Models\Training;
use App\Models\Unity;
use Livewire\Component;

class Create extends Component
{
    public Training $training;

    public $tool_id;
    public $tool_name;
    public $unity;
    public $unities;
    public $intervals;
    public $date;
    public $start;
    public $end;

    public function mount()
    {
        $this->training_id  = $this->training->id;
        $this->tool_id      = $this->training->tool->id;
        $this->tool_name    = $this->training->tool->name;
        $this->unities      = Unity::where('tool_id',$this->tool_id)->orderBy('order')->get();
        $this->intervals    = Unity::where('order',null)->orderBy('order')->get();
    }

    public function scheduleCreate()
    {
        Schedule::create([
            'training_id' => $this->training_id,
            'unity_id' => $this->unity,
            'date' => $this->date,
            'start' => $this->start,
            'end' => $this->end,
            'tool_id' => $this->tool_id,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.schedules.index',$this->training_id);
    }

    public function render()
    {
        return view('livewire.office.schedule.create')->layout('layouts.app_office');
    }
}
