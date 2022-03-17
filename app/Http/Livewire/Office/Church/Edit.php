<?php

namespace App\Http\Livewire\Office\Church;

use Livewire\Component;
use App\Models\Church;

class Edit extends Component
{
    public Church $church;

    public $cod;
    public $name;
    public $pastor;
    public $phone;
    public $email;
    public $street;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;
    public $zipcode;
    public $contact;
    public $contact_phone;
    public $contact_email;
    public $comment;

    protected $rules = [
        'name' =>              'required',
        'pastor' =>            'required',
        'phone' =>             'required|integer',
        'email' =>             'required|email',
        'street' =>            'required',
        'number' =>            'required',
        'complement' =>        'required',
        'neighborhood' =>      'required',
        'city' =>              'required',
        'state' =>             'required',
        'zipcode' =>           'required|digits:8|integer',
        'contact' =>           'required',
        'contact_phone' =>     'required|integer',
        'contact_email' =>     'required|email',
        'comment' =>           'required',
    ];

    public function mount()
    {
        $this->cod             = $this->church->id;
        $this->name            = $this->church->name;
        $this->pastor          = $this->church->pastor;
        $this->phone           = $this->church->phone;
        $this->email           = $this->church->email;
        $this->street          = $this->church->street;
        $this->number          = $this->church->number;
        $this->complement      = $this->church->complement;
        $this->neighborhood    = $this->church->neighborhood;
        $this->city            = $this->church->city;
        $this->state           = $this->church->state;
        $this->zipcode         = $this->church->zipcode;
        $this->contact         = $this->church->contact;
        $this->contact_phone   = $this->church->contact_phone;
        $this->contact_email   = $this->church->contact_email;
        $this->comment         = $this->church->comment;
    }

    public function churchUpdate()
    {

        $this->validate();

        $this->church->update([
            'name'          => $this->name,
            'pastor'        => $this->pastor,
            'phone'         => $this->phone,
            'email'         => $this->email,
            'street'        => $this->street,
            'number'        => $this->number,
            'complement'    => $this->complement,
            'neighborhood'  => $this->neighborhood,
            'city'          => $this->city,
            'state'         => $this->state,
            'zipcode'       => $this->zipcode,
            'contact'       => $this->contact,
            'contact_phone' => $this->contact_phone,
            'contact_email' => $this->contact_email,
            'comment'       => $this->comment
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function view($cod)
    {
        $this->redirectRoute('office.churches.view','$cod');
    }

    public function render()
    {
        return view('livewire.office.church.edit')->layout('layouts.app_office');
    }
}
