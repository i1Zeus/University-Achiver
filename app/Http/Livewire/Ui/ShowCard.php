<?php

namespace App\Http\Livewire\Ui;

use App\Models\Event;
use Livewire\Component;


class ShowCard extends Component
{

    public function mount($id)
    {
        $this->event = Event::find($id);
        
    }


    public function render()
    {
        return view('livewire.ui.show-card');
    }
}
