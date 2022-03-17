<?php

namespace App\Http\Livewire\Office\Category;

use App\Models\Category;
use Livewire\Component;

class View extends Component
{
    public Category $category;
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }
    public function remove()
    {
        $this->category->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.categories.index');
    }

    public function render()
    {
        return view('livewire.office.category.view')->layout('layouts.app_office');
    }
}
