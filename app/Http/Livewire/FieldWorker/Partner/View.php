<?php

namespace App\Http\Livewire\FieldWorker\Partner;

use Livewire\Component;
use App\Models\Partner;

class View extends Component
{
    public Partner $partner;

    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function remove()
    {
        $this->partner->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('fieldworker.partners.index');
    }

    public function render()
    {
        return view('livewire.field-worker.partner.view')->layout('layouts.app_fieldworker');
    }
}
