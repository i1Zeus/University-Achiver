<?php

namespace App\Http\Livewire\Ui;

use App\Models\{Event, Attendance};
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;


class ShowCard extends Component
{
    use LivewireAlert;

    public $event, $title, $description ,$image_path ,$state,$address,$start,$end,$event_id, $image_loc , $attandance;

    protected $listeners = ['delete', '$refresh'];

    // public function mount($event_id)
    // {      
    //     $this->event_id = $event_id;
    //     $this->event = Event::findOrFail($event_id);
    //     $this->title = $this->event->title;
    //     $this->description = $this->event->description;
    //     $this->image_path = $this->event->image_path;
    //     $this->state = $this->event->state;
    //     $this->address = $this->event->address;
    //     $this->start = $this->event->start;
    //     $this->end = $this->event->end;
    // }
    public function mount($event_id)
    {
        $this->event = Event::findOrFail($event_id);
    }
    public function delete()
    {   
        Event::findOrFail($this->event_id)->delete();
        $this->alert('success', 'تم حذف الحالة', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        redirect()->route('archive');
    }
    

    public function confirm($id)
    {
        $this->event_id = $id;
        $this->alert('warning', 'هل انت متأكد من حذف الحالة؟', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }
    
    public function download($id)
    {
        $event = Event::findOrFail($id);
        return response()->download(public_path($event->file_path));
    }

    public function render()
    {
        return view('livewire.ui.show-card');
    }
}
