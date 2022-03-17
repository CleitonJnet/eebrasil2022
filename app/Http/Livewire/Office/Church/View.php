<?php

namespace App\Http\Livewire\Office\Church;

use Livewire\Component;
use App\Models\Church;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;

    public Church $church;

    public $cod;
    public $name;
    public $pastor;
    public $facilitator;
    public $church_phone;
    public $church_email;
    public $facilitator_phone;
    public $facilitator_email;
    public $street;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;
    public $zipcode;
    public $comment;
    public $search;
    public $collum = 'users.name';
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function search_clear()
    {
        $this->search = null;
    }

    public function mount()
    {
        $this->cod                  = $this->church->id;
        $this->name                 = $this->church->name;
        $this->pastor               = $this->church->pastor;
        $this->phone                = $this->church->phone;
        $this->email                = $this->church->email;
        $this->street               = $this->church->street;
        $this->number               = $this->church->number;
        $this->complement           = $this->church->complement;
        $this->neighborhood         = $this->church->neighborhood;
        $this->city                 = $this->church->city;
        $this->state                = $this->church->state;
        $this->zipcode              = $this->church->zipcode;
        $this->contact              = $this->church->contact;
        $this->contact_phone        = $this->church->contact_phone;
        $this->contact_email        = $this->church->contact_email;
        $this->comment              = $this->church->comment;
    }

    public function remove()
    {
        $this->church->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.churches.index');
    }

    public function render()
    {
        $users = Church::find($this->cod)->users()
        ->where($this->collum,'like','%'.$this->search.'%')
        ->orderBy('users.name')->paginate(10);

        return view('livewire.office.church.view',compact('users'))->layout('layouts.app_office');
    }
}
