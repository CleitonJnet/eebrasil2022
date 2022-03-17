<?php

namespace App\Http\Livewire\FieldWorker\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $collum = 'users.name';
    public $search;

    public function search_clear()
    {
        $this->search = null;
    }

    public function render()
    {
        /*
            Exibir usuarios das igrejas onde este fieldworker está vinculado.
        */
        $users = User::whereIn('church_id',function($ch){
            $ch->select('church_id')->from('church_user')->where('user_id',Auth()->user()->id);
        })
        ->where($this->collum,'like','%'.$this->search.'%')
        ->orderBy('users.name')->paginate(10);

        return view('livewire.field-worker.user.index',compact('users'))->layout('layouts.app_fieldworker');
    }
}
