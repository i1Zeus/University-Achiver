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

    public function mount($event_id)
    {
        $this->event_id = $event_id;
    }
    
    public function add(Attendance $attendance)
    {
        $this->validate();
        $data = [
            'event_id' => $this->event_id,
            'name' => $this->name,
            'email' => $this->email,
            'adjective' => $this->adjective,
            
        ];
        
        $attendance = new Attendance();
        $attendance->add($data);
        $this->name = '';
        $this->email = '';
        $this->adjective = '';
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
