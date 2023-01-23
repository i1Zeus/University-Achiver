<?php

namespace App\Http\Livewire\MainPage;

use App\Models\Event;
use Livewire\Component;

class Main extends Component
{
    protected $listeners = ['$refresh', 'search'];
    public $search, $events;
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {
        $search = '%' . $this->search . '%';
        // $this->events = Event::orderByDesc('id')->paginate(30);
        $this->events = Event::where('title', 'LIKE', $search)->orderByDesc('id')->get();
        return view('livewire.main-page.main');
    }
}
