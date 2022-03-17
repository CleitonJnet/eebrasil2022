<?php

namespace App\Http\Livewire\Office\User;

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
        $users = User::where($this->collum,'like','%'.$this->search.'%')
        ->orderBy('users.name')->paginate(10);

        return view('livewire.office.user.index',compact('users'))->layout('layouts.app_office');
    }
}
