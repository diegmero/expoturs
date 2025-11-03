<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\NegotiationTable;

class NegotiationTablesMap extends Component
{
    public $tables;

    public function mount()
    {
        $this->loadTables();
    }

    public function loadTables()
    {
        $this->tables = NegotiationTable::orderBy('table_number')->get()->keyBy('table_number');
    }

    public function render()
    {
        return view('livewire.negotiation-tables-map');
    }
}
