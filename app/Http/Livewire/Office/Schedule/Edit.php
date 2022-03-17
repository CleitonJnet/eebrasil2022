<?php

namespace App\Http\Livewire\Office\Schedule;

use App\Models\Schedule;
use App\Models\Unity;
use Livewire\Component;

class Edit extends Component
{
    public Schedule $schedule;

    public $cod;
    public $tool_id;
    public $tool_name;
    public $unity;
    public $unities;
    public $intervals;
    public $date;
    public $start;
    public $end;
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function mount()
    {
        $this->cod          = $this->schedule->id;
        $this->tool_id      = $this->schedule->tool->id;
        $this->tool_name    = $this->schedule->tool->name;
        $this->unity        = $this->schedule->unity_id;
        $this->date         = $this->schedule->date;
        $this->start        = $this->schedule->start;
        $this->end          = $this->schedule->end;

        $this->unities      = Unity::where('tool_id',$this->tool_id)->orWhere('tool_id',null)->orderBy('order')->get();
        $this->intervals    = Unity::where('order',null)->orderBy('order')->get();
    }

    public function scheduleUpdate()
    {
        $this->schedule->update([
            'unity_id' => $this->unity,
            'date' => $this->date,
            'start' => $this->start,
            'end' => $this->end,
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function remove()
    {
        $this->schedule->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.schedules.index',$this->schedule->training_id);
    }

    public function render()
    {
        return view('livewire.office.schedule.edit')->layout('layouts.app_office');
    }
}
