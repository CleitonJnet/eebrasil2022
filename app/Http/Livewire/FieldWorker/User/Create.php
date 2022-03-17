<?php

namespace App\Http\Livewire\FieldWorker\User;

use App\Models\Church;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $phone;
    public $email;
    public $street;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;
    public $zipcode;
    public $church_id;

    protected $rules = [
        'name' =>              'required',
        'phone' =>             'required',
        'email' =>             'required',
        'street' =>            'required',
        'number' =>            'required',
        'complement'   =>      'required',
        'neighborhood' =>      'required',
        'city' =>              'required',
        'state' =>             'required',
        'zipcode' =>           'required',
    ];

    public function userStore()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'phone' => Str::of($this->phone)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'email' => strtolower($this->email),
            'street' => $this->street,
            'number' => $this->number,
            'complement' => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'state' => $this->state,
            'zipcode' => Str::of($this->zipcode)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'church_id' => $this->church_id,
            'password' => Hash::make('Master_01')
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('fieldworker.users.index');
    }

    public function render()
    {
        $churches = Church::orderBy('name')->get();
        return view('livewire.field-worker.user.create',compact('churches'))->layout('layouts.app_fieldworker');
    }
}
