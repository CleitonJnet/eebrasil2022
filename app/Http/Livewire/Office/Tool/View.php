<?php

namespace App\Http\Livewire\Office\Tool;

use App\Models\Tool;
use Livewire\Component;

class View extends Component
{
    public Tool $tool;
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function remove()
    {
        $this->tool->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.categories.view',$this->tool->category_id);
    }

    public function render()
    {
        return view('livewire.office.tool.view')->layout('layouts.app_office');
    }
}
