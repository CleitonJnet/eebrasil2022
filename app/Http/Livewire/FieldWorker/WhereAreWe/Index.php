<?php

namespace App\Http\Livewire\FieldWorker\WhereAreWe;

use App\Models\Church;
use App\Models\Zone;
use Livewire\Component;

class Index extends Component
{
    public $states;
    public $uf;
    public $tot;
    public $bg_color;
    public $population;
    public $protestantism;
    public $catholicism;
    public $atheism;
    public $consult;
    public $church;
    public $totPerChurch;

    public function verifyState($id)
    {
        $this->consult       = Zone::find($id);
        $this->totPerChurch  = Church::where('state',$this->consult->initial)->count();
        $this->population    = $this->consult->population;
        $this->protestantism = $this->consult->protestantism;
        $this->catholicism   = $this->consult->catholicism;
        $this->atheism       = $this->consult->atheism;
    }

    public function render()
    {
        return view('livewire.field-worker.where-are-we.index')->layout('layouts.app_fieldworker');
    }
}
