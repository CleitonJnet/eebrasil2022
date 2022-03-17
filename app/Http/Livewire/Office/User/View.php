<?php

namespace App\Http\Livewire\Office\User;

use App\Models\Church;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class View extends Component
{

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
    public $password;
    public $role_id;
    public $comment;
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function mount()
    {
        $this->cod                  = $this->user->id;
        $this->name                 = $this->user->name;
        $this->birth                = $this->user->birth;
        $this->gender               = $this->user->gender;
        $this->phone                = $this->user->phone;
        $this->email                = $this->user->email;
        $this->street               = $this->user->street;
        $this->number               = $this->user->number;
        $this->complement           = $this->user->complement;
        $this->neighborhood         = $this->user->neighborhood;
        $this->city                 = $this->user->city;
        $this->state                = $this->user->state;
        $this->zipcode              = $this->user->zipcode;
        $this->comment              = $this->user->comment;
        $this->church_id            = $this->user->church_id;
    }

    public function resetPassword()
    {
        $this->user->update([ 'password' => Hash::make($this->password) ]);
        session()->flash('message','Senha atualizada com sucesso!');
        $this->password = null;
    }

    public function remove()
    {
        $this->user->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.users.index');
    }

    public function render()
    {
        $church = Church::find($this->church_id);
        $user_roles = User::find($this->cod)->roles()->orderBy('name')->get();
        $roles = Role::all();
        return view('livewire.office.user.view',compact('church','user_roles','roles'))->layout('layouts.app_office');
    }
}
