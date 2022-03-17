<?php

namespace App\Http\Livewire\Facilitator;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.facilitator.dashboard')->layout('layouts.app_facilitator');
    }
}
