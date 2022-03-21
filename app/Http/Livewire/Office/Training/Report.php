<?php

namespace App\Http\Livewire\Office\Training;

use App\Models\Student;
use App\Models\Training;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Report extends Component
{
    public Training $training;

    public $widthp;
    public $ojtsDays;
    public $ojtData;
    public $ojts;
    public $totPastors;
    public $totChurches;

    public function render()
    {
        $this->ojts = DB::table('Ojts')->where('training_id',$this->training->id)->select('date')->distinct()->orderBy('ojts.date')->get();
        $this->ojtsDays = $this->ojts->count('date');
        $this->widthp = 100/($this->ojtsDays+1);

        $this->totPastors = Student::where('training_id',$this->training->id)
                        ->join('users','users.id','=','students.user_id')
                        ->where('users.pastor',1)
                        ->count();

        $this->totChurches = Student::where('training_id',$this->training->id)
        ->join('users','users.id','=','students.user_id')
        ->join('churches','churches.id','=','users.church_id')
        ->distinct()
        ->count();

        return view('livewire.office.training.report')->layout('layouts.app_office');
    }
}
