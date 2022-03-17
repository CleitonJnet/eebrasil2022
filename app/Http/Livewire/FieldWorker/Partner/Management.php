<?php

namespace App\Http\Livewire\FieldWorker\Partner;

use Livewire\Component;
use App\Models\PartnerManagement;

class Management extends Component
{
    public $code;
    public $rent;
    public $ministery;
    public $medical;
    public $admin;
    public $other;
    public $offer;
    public $monthto;
    public $progress;
    public $goal;
    public $needValue;
    public $offerMonthly;
    public $needPartner;
    public $needInvite;
    public $needMeet;
    public $gmNewOffer;
    public $gmNeedPartner;
    public $gmNeedInvite;
    public $gmNeedMeet;
    public $gwNewOffer;
    public $gwNeedPartner;
    public $gwNeedInvite;
    public $gwNeedMeet;
    public $issetPartner;

    public function mount(PartnerManagement $partner)
    {
        $this->cod          = $partner->id;
        $this->rent         = $partner->rent;
        $this->ministery    = $partner->ministery;
        $this->medical      = $partner->medical;
        $this->admin        = $partner->admin;
        $this->other        = $partner->other;
        $this->offer        = $partner->offer;
        $this->monthto      = $partner->monthto;

        // GOAL
        $this->goal         = $this->rent + $this->ministery + $this->medical + $this->admin + $this->other;
        $this->valueYearly = (Auth()->user()->partners()->where('status','active')->where('period','Yearly')->get())->sum('value');
        $this->valueMouthly = (Auth()->user()->partners()->where('status','active')->where('period','Monthly')->get())->sum('value');
        $this->valueUnique = (Auth()->user()->partners()->where('status','active')->where('period','Unique')->get())->sum('value');
        $this->offerMonthly = $this->valueYearly/12 + $this->valueUnique/12 + $this->valueMouthly;
        $this->needValue    = ($this->goal > $this->offerMonthly)?$this->goal - $this->offerMonthly:0;

        $this->needPartner  = ($this->needValue > 0)? ceil( $this->needValue/$this->offer ) : 0;
        $this->needMeet     = $this->needPartner * 3;
        $this->needInvite   = $this->needMeet * 3;

        // GOAL MONTHLY
        $this->gmNewOffer    = ($this->needValue > 0)? $this->needValue/$this->monthto :0;
        $this->gmNeedPartner = ($this->needValue > 0)? ceil($this->needPartner/$this->monthto):0;
        $this->gmNeedMeet    = $this->gmNeedPartner * 3;
        $this->gmNeedInvite  = $this->gmNeedMeet * 3;

        // GOAL WEEKLY
        $this->gwNewOffer    = ($this->needValue > 0)? $this->gmNewOffer/4          : 0;
        $this->gwNeedPartner = ($this->needValue > 0)? ceil($this->gmNeedPartner/4) : 0;
        $this->gwNeedMeet    = ($this->needValue > 0)? $this->gwNeedPartner * 3     : 0;
        $this->gwNeedInvite  = ($this->needValue > 0)? $this->gwNeedMeet * 3        : 0;

        if ($this->needValue > 0) {$this->progress = $this->offerMonthly * 100 / $this->goal;}else{$this->progress = 100;}

        // Verifica se já existe um planejamento
        if (Auth()->user()->partnership()->count() > 0)
        {
            $this->issetPartner = true;
        }
        else
        {
            $this->issetPartner = false;
        }


    }

    public function partnershipCreate()
    {
        $partner = PartnerManagement::create([
            'rent'      => $this->rent,
            'ministery' => $this->ministery,
            'medical'   => $this->medical,
            'admin'     => $this->admin,
            'other'     => $this->other,
            'offer'     => $this->offer,
            'monthto'   => $this->monthto,
            'user_id'   => Auth()->user()->id,
        ]);

        session()->flash('message','Registro criado com sucesso');
        $this->redirectRoute('fieldworker.partners.management',$partner->id);

    }

    public function partnershipUpdate()
    {
        $partnership = PartnerManagement::find($this->cod);
        $partnership->update([
            'rent'      => $this->rent,
            'ministery' => $this->ministery,
            'medical'   => $this->medical,
            'admin'     => $this->admin,
            'other'     => $this->other,
            'offer'     => $this->offer,
            'monthto'   => $this->monthto,
        ]);

        session()->flash('message','Resultado salvo com sucesso');
        $this->redirectRoute('fieldworker.partners.management',$this->cod);
    }

    public function render()
    {

        return view('livewire.field-worker.partner.management')->layout('layouts.app_fieldworker');
    }
}
