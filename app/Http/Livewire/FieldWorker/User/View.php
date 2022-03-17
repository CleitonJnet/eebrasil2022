<?php

namespace App\Http\Livewire\FieldWorker\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class View extends Component
{
    public User $user;

    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

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
        $this->redirectRoute('fieldworker.users.index');
    }

    public function render()
    {
        return view('livewire.field-worker.user.view')->layout('layouts.app_fieldworker');
    }
}
