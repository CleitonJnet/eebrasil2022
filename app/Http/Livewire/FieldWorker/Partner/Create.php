<?php

namespace App\Http\Livewire\FieldWorker\Partner;

use App\Models\Partner;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;
    public $phone;
    public $gender;
    public $email;
    public $street;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;
    public $zipcode;
    public $birth;
    public $status;
    public $period;
    public $value;
    public $since;
    public $comment;

    protected $rules = [
        'name'         => 'required',
        'phone'        => 'required',
        'gender'       => 'required',
        'email'        => 'required',
        'street'       => 'required',
        'number'       => 'required',
        'complement'   => 'required',
        'neighborhood' => 'required',
        'city'         => 'required',
        'state'        => 'required',
        'zipcode'      => 'required',
        'birth'        => 'required',
        'status'       => 'required',
        'period'       => 'required',
        'value'        => 'required',
        'since'        => 'required',
        'comment'      => 'required',
    ];

    public function partnerCreate()
    {
        $this->validate();

        Partner::create([
            'name'         => $this->name,
            'phone'        => Str::of($this->phone)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'gender'       => $this->gender,
            'email'        => strtolower($this->email),
            'street'       => $this->street,
            'number'       => $this->number,
            'complement'   => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city'         => $this->city,
            'state'        => $this->state,
            'zipcode'      => Str::of($this->zipcode)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'birth'        => $this->birth,
            'status'       => $this->status,
            'period'       => $this->period,
            'value'        => $this->value,
            'since'        => $this->since,
            'comment'      => $this->comment,
            'user_id'      => Auth()->user()->id,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('fieldworker.partners.index');
    }

    public function render()
    {
        return view('livewire.field-worker.partner.create')->layout('layouts.app_fieldworker');
    }
}
