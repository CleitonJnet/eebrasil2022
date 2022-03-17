<?php

namespace App\Http\Livewire\Office\Tool;

use App\Models\Tool;
use Livewire\Component;

class Edit extends Component
{
    public Tool $tool;

    public $cod;
    public $name;
    public $description;
    public $knowhow;
    public $category_id;

    public function mount()
    {
        $this->cod = $this->tool->id;
        $this->name = $this->tool->name;
        $this->description = $this->tool->description;
        $this->knowhow = $this->tool->knowhow;
        $this->category_id = $this->tool->category_id;
    }

    protected $rules = [
        'name'          => 'required',
        'description'   => 'required',
        'knowhow'       => 'required',
    ];

    public function categoryUpdate()
    {
        $this->validate();

        $this->tool->update([
            'name' => $this->name,
            'description' => $this->description,
            'knowhow' => $this->knowhow,
            'category_id' => $this->category_id,
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.office.tool.edit')->layout('layouts.app_office');
    }
}
