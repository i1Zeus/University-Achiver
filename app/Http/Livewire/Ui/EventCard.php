<?php

namespace App\Http\Livewire\Ui;
use Livewire\Component;
class EventCard extends Component
{
    public $event; 
    public function render()
    {
        return view('livewire.ui.event-card');
    }
}
