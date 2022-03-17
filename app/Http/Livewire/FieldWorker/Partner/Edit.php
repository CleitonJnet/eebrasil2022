<?php

namespace App\Http\Livewire\FieldWorker\Partner;

use App\Models\Partner;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    public Partner $partner;

    public $cod;
    public $name;
    public $gender;
    public $phone;
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

    public function mount()
    {
        $this->cod          = $this->partner->id;
        $this->name         = $this->partner->name;
        $this->gender       = $this->partner->gender;
        $this->phone        = $this->partner->phone;
        $this->email        = $this->partner->email;
        $this->street       = $this->partner->street;
        $this->number       = $this->partner->number;
        $this->complement   = $this->partner->complement;
        $this->neighborhood = $this->partner->neighborhood;
        $this->city         = $this->partner->city;
        $this->state        = $this->partner->state;
        $this->zipcode      = $this->partner->zipcode;
        $this->birth        = $this->partner->birth;
        $this->status       = $this->partner->status;
        $this->period       = $this->partner->period;
        $this->value        = $this->partner->value;
        $this->since        = $this->partner->since;
        $this->comment      = $this->partner->comment;
    }

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

    public function partnerUpdate()
    {
        $this->validate();

        $this->partner->update([
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

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.field-worker.partner.edit')->layout('layouts.app_fieldworker');
    }
}
