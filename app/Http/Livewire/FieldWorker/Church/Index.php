<?php

namespace App\Http\Livewire\FieldWorker\Church;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $collum = 'churches.name';
    public $search;

    public function search_clear()
    {
        $this->search = null;
    }

    public function render()
    {
        $churches = Auth()->user()->fieldworks()
        ->where($this->collum,'like','%'.$this->search.'%')
        ->orderBy('name')->paginate(10);

        return view('livewire.field-worker.church.index', compact('churches'))->layout('layouts.app_fieldworker');
    }
}
