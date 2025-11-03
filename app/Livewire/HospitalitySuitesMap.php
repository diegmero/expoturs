<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HospitalitySuite;

class HospitalitySuitesMap extends Component
{
    public $suites;

    public function mount()
    {
        $this->loadSuites();
    }

    public function loadSuites()
    {
        $this->suites = HospitalitySuite::orderBy('suite_number')->get();
    }

    public function render()
    {
        return view('livewire.hospitality-suites-map');
    }
}
