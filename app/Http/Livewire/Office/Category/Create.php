<?php

namespace App\Http\Livewire\Office\Category;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;
    public $knowhow;

    protected $rules = [
        'name'          => 'required',
        'description'   => 'required',
        'knowhow'       => 'required',
    ];

    public function categoryCreate()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'knowhow' => $this->knowhow,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.categories.index');
    }

    public function render()
    {
        return view('livewire.office.category.create')->layout('layouts.app_office');
    }
}
