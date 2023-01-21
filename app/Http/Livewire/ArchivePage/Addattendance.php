<?php

namespace App\Http\Livewire\ArchivePage;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Attendance;
use App\Models\Event;
class Addattendance extends Component
{
    use LivewireAlert;
    public $event_id ,$name , $email , $adjective;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'adjective' => 'required',
    ];

    
    public function add(Attendance $attendance)
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'adjective' => $this->adjective,
            'event_id' => $this->event_id,
        ];
        
        $attendance = new Attendance();
        $attendance->add($data);
        $this->reset();
        $this->alert('success', 'تمت اضافتك بنجاح  ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }   
    public function render()
    {
        return view('livewire.archive-page.addattendance');
    }
}
