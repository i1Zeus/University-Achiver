<?php

namespace App\Http\Livewire\ArchivePage;
use App\Models\Event;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;
    public $title, $description, $image_path,  $state, $address, $start, $end , $new_image ,$event_id ;
        protected $rules = [
            'title' => 'required',
            'description' => 'required',
            'state' => 'required',
            'address' => 'required',
            'start' => 'required',
            'end' => 'required ',
        ];
        public function mount ($event_id)
        {
            $this->event_id = $event_id;
            if($event_id){
                $event=event::findOrFail($event_id);
                $this->title = $event->title;
                $this->description = $event->description;
                $this->image_path = $event->image_path;
                $this->state = $event->state;
                $this->address = $event->address;
                $this->start = $event->start;
                $this->end = $event->end;
            }
        }
        public function edit()
    {
        $this->validate();
        
            $data = [
                'title' => $this->title,
                'description' => $this->description,
                // 'state' => $this->state,
                'address' => $this->address,
                'start' => $this->start,
                'end' => $this->end,
            ];
        

        $event = Event::findOrFail($this->event_id);
        $event->edit($data);
        
        // if ($this->new_image){
        //     $event->update_image($this->new_image); 
        // }
        
        
        $this->alert('success', 'تم التعديل', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        redirect()->route('archive');
    }
    public function render()
    {
        return view('livewire.archive-page.edit');
    }
}
