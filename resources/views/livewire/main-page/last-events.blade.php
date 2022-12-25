<div>
    <div class="flex flex-col">
        <div class="mb-5 mr-15">
            <span class="text-4xl font-semibold">اخر الأحداث</span>
        </div>
        {{-- <div class="flex flex-wrap gap-20px">
            @foreach ($events as $event)
                <livewire:ui.event-card :event="$event" />
            @endforeach --}}
        <div class="flex gap-12 justify-evenly">
            @foreach ($events as $event)
                <livewire:ui.event-card :event="$event" key="{{ now() }}" />
            @endforeach
        </div>
    </div>
</div>
