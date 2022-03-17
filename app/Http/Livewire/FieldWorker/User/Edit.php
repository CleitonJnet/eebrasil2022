<?php

namespace App\Http\Livewire\FieldWorker\User;

use App\Models\Church;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public User $user;

    public $cod;
    public $name;
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
    public $photo;

   public function mount()
    {
        $this->cod          = $this->user->id;
        $this->name         = $this->user->name;
        $this->gender       = $this->user->gender;
        $this->birth        = $this->user->birth;
        $this->phone        = $this->user->phone;
        $this->email        = $this->user->email;
        $this->street       = $this->user->street;
        $this->number       = $this->user->number;
        $this->complement   = $this->user->complement;
        $this->neighborhood = $this->user->neighborhood;
        $this->city         = $this->user->city;
        $this->state        = $this->user->state;
        $this->zipcode      = $this->user->zipcode;
        $this->church_id    = $this->user->church_id;
        $this->comment      = $this->user->comment;
    }

    protected $rules = [
        'name' =>              'required',
        'gender' =>            'required',
        'birth' =>             'required',
        'phone' =>             'required',
        'email' =>             'required',
        'street' =>            'required',
        'number' =>            'required',
        'complement' =>        'required',
        'neighborhood' =>      'required',
        'city' =>              'required',
        'state' =>             'required',
        'comment' =>           'required',
        'zipcode' =>           'required',
        'photo' =>             'nullable|mimes:jpg,jpeg,png|max:1024',
    ];

    public function userUpdate()
    {
        if (isset($this->photo)) {
            $this->user->updateProfilePhoto($this->photo);
        }

        $this->validate();

        $this->user->update([
            'name'         => $this->name,
            'gender'       => $this->gender,
            'birth'        => $this->birth,
            'phone'        => Str::of($this->phone)->replaceMatches('/[^A-Za-z0-9]++/', ''),
            'email'        => $this->email,
            'street'       => $this->street,
            'number'       => $this->number,
            'complement'   => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city'         => $this->city,
            'state'        => $this->state,
            'zipcode'      => $this->zipcode,
            'church_id'    => $this->church_id,
            'comment'      => $this->comment,
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function view($cod)
    {
        $this->redirectRoute('fieldworker.users.view',$cod);
    }

    public function deleteProfilePhoto()
    {
        $this->user->deleteProfilePhoto();
        $this->emit('components.navigations.fieldworker');
    }

    public function render()
    {
        $churches = Church::orderBy('name')->get();
        return view('livewire.field-worker.user.edit',compact('churches'))->layout('layouts.app_fieldworker');
    }
}
