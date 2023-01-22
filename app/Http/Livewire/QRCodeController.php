<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QRCodeController extends Component
{   public $event_id;
    public function mount($event_id)
    {
        $this->event_id = $event_id;
    }
    public function render()
    {
        return view('livewire.q-r-code-controller');
    }
    public function index() 
    {
        $link = "https://codeanddeploy.com/category/laravel";

        return view('barcode', [
            'link' => $link
        ]);
    }
}
