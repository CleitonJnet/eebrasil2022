<?php

namespace App\Http\Livewire\FieldWorker\Training;

use App\Models\Training;
use Livewire\Component;

class Edit extends Component
{
    public Training $training;

    public $cod;
    public $tool;
    public $teacher;
    public $type;
    public $church;
    public $url;
    public $date;

    public function mount()
    {
        $this->cod    = $this->training->id;
        $this->tool    = $this->training->tool_id;
        $this->teacher = $this->training->user_id;
        $this->type    = $this->training->type;
        $this->church  = $this->training->church_id;
        $this->url     = $this->training->url;
        $this->date    = $this->training->date;
    }

    protected $rules = [
        'tool' =>   'required',
        'teacher' =>   'required',
        'type' =>      'required',
        'date' =>      'required',
    ];

    public function eventUpdate()
    {
        $this->validate();

        $this->training->update([
            'tool_id'   => $this->tool,
            'user_id'   => $this->teacher,
            'type'      => $this->type,
            'church_id' => $this->church,
            'url'       => $this->url,
            'date'      => $this->date,
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.field-worker.training.edit')->layout('layouts.app_fieldworker');
    }
}
