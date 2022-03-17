<?php

namespace App\Http\Livewire\Office\Tool;

use App\Models\Category;
use App\Models\Tool;
use Livewire\Component;

class Create extends Component
{
    public Category $category;

    public $name;
    public $description;
    public $knowhow;

    protected $rules = [
        'name'          => 'required',
        'description'   => 'required',
        'knowhow'       => 'required',
    ];

    public function toolCreate()
    {
        $this->validate();

        Tool::create([
            'name' => $this->name,
            'description' => $this->description,
            'knowhow' => $this->knowhow,
            'category_id' => $this->category->id,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.categories.view',$this->category->id);
    }


    public function render()
    {
        return view('livewire.office.tool.create')->layout('layouts.app_office');
    }
}
