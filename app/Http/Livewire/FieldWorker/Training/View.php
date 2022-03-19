<?php

namespace App\Http\Livewire\FieldWorker\Training;

use App\Models\Training;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;

    public Training $training;

    public $showJetstreamModal = false;
    public $collum = 'users.name';
    public $search;

    public function search_clear()
    {
        $this->search = null;
    }

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function remove()
    {
        $this->training->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.trainings.index');
    }

    public function render()
    {
        $class = DB::table('students')
        ->join('trainings','trainings.id','=','students.training_id')
        ->join('users','users.id','=','students.user_id')
        ->where('training_id',$this->training->id)
        ->where($this->collum,'like','%'.$this->search.'%')
        ->select(
            'users.id as id',
            'users.name as name',
            'users.email as email',
            'users.phone as phone'
            )
        ->orderBy('users.name')->paginate(10);

        return view('livewire.field-worker.training.view',compact('class'))->layout('layouts.app_fieldworker');
    }
}
