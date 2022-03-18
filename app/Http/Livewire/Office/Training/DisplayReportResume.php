<?php

namespace App\Http\Livewire\Office\Training;

use App\Models\Training;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DisplayReportResume extends Component
{
    public Training $training;

    public $widthp;
    public $ojtsDays;
    public $ojtData;
    public $ojts;

    public function render()
    {
        $this->ojts = DB::table('Ojts')->where('training_id',$this->training->id)->select('date')->distinct()->get();
        $this->ojtsDays = $this->ojts->count('date');
        $this->widthp = 100/($this->ojtsDays+1);

        return view('livewire.office.training.display-report-resume');
    }
}
