<?php

namespace App\Http\Livewire\ArchivePage;

use App\Models\Event;
use Livewire\Component;

class Archive extends Component
{
    public function render()
    {
        // $this->events = Event::orderByDesc('id')->paginate(30);
        $this->events = Event::orderByDesc('id')->get();
        return view('livewire.archive-page.archive');
    }
}
