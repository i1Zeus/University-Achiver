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
            @forelse ($events as $event)
                <livewire:ui.event-card :event="$event" key="{{ now() }}" />
                @empty
                <div class="flex flex-col items-center justify-center p-10 ">
                    <div class="flex flex-col items-center justify-center">
                        <span class="text-2xl font-semibold">لا توجد احداث</span>
                    </div>
            @endforelse
        </div>
    </div>
</div>
