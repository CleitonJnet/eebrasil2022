<?php

namespace App\Http\Livewire\Office\Training;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    public function search_clear()
    {
        $this->search = null;
    }

    public function render()
    {
        $trainings = DB::table('trainings')
        ->join('churches','.trainings.church_id','=','churches.id')
        ->join('tools','.tools.id','=','trainings.tool_id')
        ->join('users','.users.id','=','trainings.user_id')
        ->where('date','>',now())
        ->where(function($ch){
            $ch
            ->where('churches.name','like','%'.$this->search.'%')
            ->orWhere('users.name','like','%'.$this->search.'%')
            ->orWhere('churches.email','like','%'.$this->search.'%')
            ->orWhere('churches.city','like','%'.$this->search.'%')
            ->orWhere('tools.name','like','%'.$this->search.'%')
            ->orWhere('trainings.date','like','%'.date('Y-m-d',strtotime($this->search)).'%');
        })
        ->select(
            'trainings.id as id',
            'trainings.date as date',
            'churches.name as ch_name',
            'users.name as teacher',
            'churches.phone as ch_phone',
            'churches.email as ch_email',
            'churches.city as ch_city',
            'churches.state as ch_state',
            'tools.name as tool_name',
            )
        ->orderBy('date')->paginate(10);

        return view('livewire.office.training.index',compact('trainings'))->layout('layouts.app_office');
    }
}
