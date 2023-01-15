<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QRCodeController extends Component
{
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
