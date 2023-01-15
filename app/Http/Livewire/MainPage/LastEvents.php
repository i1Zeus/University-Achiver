<?php

namespace App\Http\Livewire\MainPage;

use App\Models\Event;
use Livewire\Component;

class LastEvents extends Component
{
    public function render()
    {
        //return last three events
        $this->events=Event::orderByDesc('id')->take(3)->get();
        // dd($this->events->toArray());
        return view('livewire.main-page.last-events');
    }
}
