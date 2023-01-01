<?php

namespace App\Http\Livewire\ArchivePage;

use Livewire\Component;
use App\Models\Event;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $title, $description, $image_path,  $state, $address, $start, $end;
    protected $rules = [
        'title' => 'required|min:3|max:60',
        'description' => 'required',
        'address' => 'required|min:3|max:120',
        'start' => 'required|date',
        'end' => 'required|date',
    ];
    public function add(Event $event)
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
        $event = new Event();
        $event->add($data);
        if ($this->image_path) {
            $event->add_image($this->image_path);
        }

        $this->reset();

        $this->alert('success', 'تم اضافة الحدث بنجاح  ', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }


    public function render()
    {
        return view('livewire.archive-page.add');
    }
}
