<?php

namespace App\Http\Livewire\Office\Training;

use App\Models\Training;
use Livewire\Component;

class Create extends Component
{
    public $tool;
    public $teacher;
    public $type;
    public $church;
    public $url;
    public $date;

    protected $rules = [
        'tool' =>   'required',
        'teacher' =>   'required',
        'type' =>      'required',
        'church' => 'required',
        'url' =>       'required',
        'date' =>      'required',
    ];

    public function eventCreate()
    {
        $this->validate();

        Training::create([
            'tool_id'      => $this->tool,
            'user_id'   => $this->teacher,
            'type'      => $this->type,
            'church_id' => $this->church,
            'url'       => $this->url,
            'date'      => $this->date,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.trainings.index');
    }

    public function render()
    {
        return view('livewire.office.training.create')->layout('layouts.app_office');
    }
}
