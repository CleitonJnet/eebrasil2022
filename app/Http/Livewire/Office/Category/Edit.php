<?php

namespace App\Http\Livewire\Office\Category;

use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public Category $category;

    public $cod;
    public $name;
    public $description;
    public $knowhow;

    public function mount()
    {
        $this->cod = $this->category->id;
        $this->name = $this->category->name;
        $this->description = $this->category->description;
        $this->knowhow = $this->category->knowhow;
    }

    protected $rules = [
        'name'          => 'required',
        'description'   => 'required',
        'knowhow'       => 'required',
    ];

    public function categoryUpdate()
    {
        $this->validate();

        $this->category->update([
            'name' => $this->name,
            'description' => $this->description,
            'knowhow' => $this->knowhow,
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.office.category.edit')->layout('layouts.app_office');
    }
}
