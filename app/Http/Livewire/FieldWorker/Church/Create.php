<?php

namespace App\Http\Livewire\FieldWorker\Church;

use App\Models\Church;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
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

    public function churchStore()
    {
        $this->validate();

        Church::create([
            'name' => $this->name,
            'pastor' => $this->pastor,
            'phone' => Str::of($this->phone)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'email' => strtolower($this->email),
            'street' => $this->street,
            'number' => $this->number,
            'complement' => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'state' => $this->state,
            'zipcode' => Str::of($this->zipcode)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'contact' => $this->contact,
            'contact_phone' => Str::of($this->contact_phone)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'contact_email' => strtolower($this->contact_email),
            'comment' => $this->comment,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('office.churches.index');
    }

    public function render()
    {
        return view('livewire.field-worker.church.create')->layout('layouts.app_fieldworker');
    }
}
