<?php

namespace App\Http\Livewire\FieldWorker\Church;

use Livewire\Component;
use App\Models\Church;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;

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
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function search_clear()
    {
        $this->search = null;
    }

    public function mount(Church $church)
    {
        $this->cod                  = $church->id;
        $this->name                 = $church->name;
        $this->pastor               = $church->pastor;
        $this->phone                = $church->phone;
        $this->email                = $church->email;
        $this->street               = $church->street;
        $this->number               = $church->number;
        $this->complement           = $church->complement;
        $this->neighborhood         = $church->neighborhood;
        $this->city                 = $church->city;
        $this->state                = $church->state;
        $this->zipcode              = $church->zipcode;
        $this->contact              = $church->contact;
        $this->contact_phone        = $church->contact_phone;
        $this->contact_email        = $church->contact_email;
        $this->comment              = $church->comment;
    }

    public function remove($id)
    {
        session()->flash('message','Registro removido com sucesso!');

        $church = Church::find($id);
        $church->delete();

        $this->redirectRoute('fieldworker.churches.index');
    }

    public function render()
    {
        $users = DB::table('users')->where('church_id',$this->cod)
        ->where(function ($user){
            $user
            ->where('users.name','like','%'.$this->search.'%')
            ->orWhere('users.email','like','%'.$this->search.'%')
            ->orWhere('users.phone','like','%'.$this->search.'%');
        })
        ->select(
            'users.id as id',
            'users.name as name',
            'users.email as email',
            'users.phone as phone',
            )
        ->orderBy('users.name')->paginate(10);

        return view('livewire.field-worker.church.view',compact('users'))->layout('layouts.app_fieldworker');
    }
}
