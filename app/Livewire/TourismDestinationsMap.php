<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TourismDestination;

class TourismDestinationsMap extends Component
{
    public $destinations;

    public function mount()
    {
        $this->loadDestinations();
    }

    public function loadDestinations()
    {
        $this->destinations = TourismDestination::orderBy('destination_number')->get()->keyBy('destination_number');
    }

    public function render()
    {
        return view('livewire.tourism-destinations-map');
    }
}
