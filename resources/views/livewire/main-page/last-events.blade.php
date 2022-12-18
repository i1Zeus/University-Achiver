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
            @for ($i = 1; $i <= 3; $i++)
                <livewire:ui.event-card />
            @endfor
        </div>
    </div>
</div>
