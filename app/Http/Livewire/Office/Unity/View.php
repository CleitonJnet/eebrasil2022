<?php

namespace App\Http\Livewire\Office\Unity;

use App\Models\Unity;
use Livewire\Component;

class View extends Component
{
    public Unity $unity;

    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function remove()
    {
        $this->unity->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.unities.index');
    }

    public function render()
    {
        return view('livewire.office.unity.view')->layout('layouts.app_office');
    }
}
