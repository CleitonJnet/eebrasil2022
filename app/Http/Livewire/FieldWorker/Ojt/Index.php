<?php

namespace App\Http\Livewire\FieldWorker\Ojt;

use App\Models\Training;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public Training $training;

    public function render()
    {
        $ojts = $this->training->ojts()->paginate(10);
        return view('livewire.field-worker.ojt.index',compact('ojts'))->layout('layouts.app_fieldworker');
    }
}
