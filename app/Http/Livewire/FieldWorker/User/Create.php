<?php

namespace App\Http\Livewire\FieldWorker\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;
    public $pastor;
    public $gender;
    public $birth;
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
    public $comment;

    protected $rules = [
        'name' =>              'required',
        'birth' =>             'required',
        'gender' =>            'required',
        'phone' =>             'required|integer',
        'email' =>             'required',
        'street' =>            'required',
        'number' =>            'required',
        'complement' =>        'required',
        'neighborhood' =>      'required',
        'city' =>              'required',
        'state' =>             'required',
        'comment' =>           'required',
        'zipcode' =>           'required|digits:8|integer',
    ];

    public function userStore()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'pastor' => $this->pastor,
            'gender' => $this->gender,
            'birth' => $this->birth,
            'phone' => Str::of($this->phone)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'email' => $this->email,
            'street' => $this->street,
            'number' => $this->number,
            'complement' => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'state' => $this->state,
            'zipcode' => Str::of($this->zipcode)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'comment' => $this->comment,
            'church_id' => $this->church_id,
            'password' => Hash::make('Master_01')
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('fieldworker.users.index');
    }

    public function render()
    {
        return view('livewire.field-worker.user.create')->layout('layouts.app_fieldworker');
    }
}
