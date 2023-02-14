<?php

namespace App\Http\Livewire\ArchivePage;

use Livewire\Component;
// use App\Models\Attendance ;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Attendance extends Component
{
    use LivewireAlert;
    public $event_id ,$name , $email ;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function add()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'event_id' => $this->event_id,
        ];
        
        $attendance = new Attendance();
        $attendance->create($data);
        $this->reset();
        $this->alert('success', 'تمت اضافتك بنجاح  ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }   
    public function render()
    {
        return view('livewire.archive-page.attendance');
    }
}
