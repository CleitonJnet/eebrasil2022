<?php

namespace App\Http\Livewire\Office\Unity;

use App\Models\Unity;
use Livewire\Component;

class Edit extends Component
{
    public Unity $unity;

    public $cod;
    public $tool_id;
    public $order;
    public $duration;
    public $name;
    public $devotional;
    public $description;
    public $knowhow;
    public $showJetstreamModal = false;

    public function showConfirmation() { $this->showJetstreamModal = true; }

    public function mount()
    {
        $this->cod         = $this->unity->cod;
        $this->tool_id     = $this->unity->tool_id;
        $this->order       = $this->unity->order;
        $this->duration    = $this->unity->duration;
        $this->name        = $this->unity->name;
        $this->devotional  = $this->unity->devotional;
        $this->description = $this->unity->description;
        $this->knowhow     = $this->unity->knowhow;
    }

    protected $rules = [
        'order'         => 'required',
        'duration'      => 'required',
        'name'          => 'required',
        'description'   => 'required',
        'knowhow'       => 'required',
    ];

    public function unityUpdate()
    {
        $this->validate();

        $this->unity->update([
            'order'       => $this->order,
            'duration'    => $this->duration,
            'name'        => $this->name,
            'devotional'  => $this->devotional,
            'description' => $this->description,
            'knowhow'     => $this->knowhow,
        ]);

        $this->emit('saved');
        session()->flash('message','Registro atualizado com sucesso!');
    }

    public function remove()
    {
        $this->unity->delete();
        session()->flash('message','Registro removido com sucesso!');
        $this->redirectRoute('office.tools.view',$this->unity->tool_id);
    }

    public function render()
    {
        return view('livewire.office.unity.edit')->layout('layouts.app_office');
    }
}
