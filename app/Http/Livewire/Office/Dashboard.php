<?php

namespace App\Http\Livewire\Office;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.office.dashboard')->layout('layouts.app_office');
    }
}
