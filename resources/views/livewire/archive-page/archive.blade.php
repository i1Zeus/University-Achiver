<div>
    <div class="flex items-center justify-center w-full h-full mt-25">
        <div class="flex flex-col items-center justify-center gap-28">
            @livewire('ui.search')

            <div class="grid grid-cols-1 gap-12 pb-20 justify-evenly md:grid-cols-3">
                @forelse ($events as $event)
                    <livewire:ui.event-card :event="$event" key="{{ now() }}" />
                @empty
                    <div class="flex items-center justify-center w-full h-full">
                       
                            <h1 class="text-3xl font-bold ">لا يوجد نتائج</h1>
                       </div>

                    @endforelse
            </div>
        </div>
    </div>
</div>
