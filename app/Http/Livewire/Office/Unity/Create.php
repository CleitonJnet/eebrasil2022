<?php

namespace App\Http\Livewire\Office\Unity;

use App\Models\Tool;
use App\Models\Unity;
use Livewire\Component;

class Create extends Component
{
    public Tool $tool;

    public $tool_id;
    public $order;
    public $duration;
    public $name;
    public $devotional;
    public $description;
    public $knowhow;

    protected $rules = [
        'order'         => 'required',
        'duration'      => 'required',
        'name'          => 'required',
        'description'   => 'required',
        'knowhow'       => 'required',
    ];

    public function mount()
    {
        $this->tool_id = $this->tool_id;
    }

    public function unityStore()
    {
        $this->validate();

        Unity::create([
            'tool_id'     => $this->tool->id,
            'order'       => $this->order,
            'duration'    => date('H:i:s',strtotime($this->duration)),
            'name'        => $this->name,
            'devotional'  => $this->devotional,
            'description' => $this->description,
            'knowhow'     => $this->knowhow,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.tools.view',$this->tool->id);
    }


    public function render()
    {
        return view('livewire.office.unity.create')->layout('layouts.app_office');
    }
}
