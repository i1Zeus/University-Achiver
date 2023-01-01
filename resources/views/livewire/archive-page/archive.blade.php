<div>
    <div class="flex items-center justify-center w-full h-full mt-25">
        
        <div class="flex flex-col items-center justify-center gap-28">
            <div class="flex gap-12 items-center justify-center">
            @livewire('ui.search')

            <a href="{{ route('add-event') }}"
                class="text-black flex items-center gap-3 text-md xl:text-xl duration-200  border border-transparent hover:border-gray-900 hover:text-primary-500 focus:ring-2 focus:ring-gray-900 ml-7  rounded-lg px-3 py-1 md:px-4 md:py-1">
                <i class="fa-solid fa-plus"></i>
                <div class=" hidden sm:block"> إضافة حدث</div>
            </a>
            </div>

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
