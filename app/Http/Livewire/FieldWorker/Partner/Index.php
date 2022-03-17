<?php

namespace App\Http\Livewire\FieldWorker\Partner;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $collum = 'partners.name';
    public $search;
    public $partnerUnique;
    public $partnerMouthly;
    public $partnerYearly;
    public $valueUnique;
    public $valueMouthly;
    public $valueYearly;
    public $totValue;
    public $partnerActive;
    public $partnerInactve;

    public function search_clear()
    {
        $this->search = null;
    }

    public function render()
    {
        $partners = Partner::where('user_id',Auth()->user()->id)
        ->where($this->collum,'like','%'.$this->search.'%')
        ->orderBy('name')->paginate(10);

        $this->partnerUnique = Auth()->user()->partners()->where('period','Unique')->count();
        $this->partnerMouthly = Auth()->user()->partners()->where('period','Monthly')->count();
        $this->partnerYearly = Auth()->user()->partners()->where('period','Yearly')->count();
        $this->partnerActive = Auth()->user()->partners()->where('status','active')->count();
        $this->partnerInactve = Auth()->user()->partners()->where('status','Inactive')->count();
        $this->valueYearly = (Auth()->user()->partners()->where('status','active')->where('period','Yearly')->get())->sum('value');
        $this->valueMouthly = (Auth()->user()->partners()->where('status','active')->where('period','Monthly')->get())->sum('value');
        $this->valueUnique = (Auth()->user()->partners()->where('status','active')->where('period','Unique')->get())->sum('value');
        $this->totValue = $this->valueYearly/12 + $this->valueUnique/12 + $this->valueMouthly;

        return view('livewire.field-worker.partner.index',compact('partners'))->layout('layouts.app_fieldworker');
    }
}
