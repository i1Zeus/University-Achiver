<div>
    <a class="relative flex flex-col duration-150 bg-white shadow-md cursor-pointer hover:shadow-lg gap-10px p-20px w-340px h-350px rounded-15px hover:scale-105"
        href="{{ route('show-card', ['event_id' => $event->id]) }}">
        {{-- Place Image --}}
        <img src="{{ asset($event->image_loc ?? '/image/Cover.jpg') }}" class="bg-black rounded-md w-300px h-150px" />
        @if ($event->state == 1)
            <div class="flex gap-30px">
                {{-- Client Iamge --}}
                <img src="{{ asset($event->image_path ?? '/image/Avatar.png') }}"
                    class="absolute bg-white rounded-full w-90px h-90px top-30 left-55" />
                {{-- Cilent Name --}}
                <span
                    class="text-24px capitalize font-bold text-black absolute top-45 right-33 w-140%">{{ $event->title }}</span>
            </div>
        @else
            <span
                class="text-24px capitalize font-bold text-black absolute top-45 right-[25px] w-140%">{{ $event->title }}</span>
        @endif
        {{-- Client Description --}}
        @if ($event->description)
            <span
                class="w-[90%] m-auto mt-10 overflow-hidden capitalize font-semibold text-md opacity-60">{{ $event->description }}</span>
        @endif
        <div class="flex justify-between w-full">
            {{-- Event Date --}}
            <div class="flex items-center justify-start w-1/3 gap-5px">
                <span class="!w-[20px] !h-[20px] iconify text-secondery-100 text-20px" data-icon="ph:clock-fill"></span>
                <p class="font-semibold text-black text-15px opacity-45"> {{ $event->start }}</p>
            </div>
            {{-- Event Location --}}
            <div class="flex items-center justify-end w-[67%] gap-5px">
                <div>
                    <span class="iconify !w-[20px] !h-[20px] text-secondery-100 text-20px"
                        data-icon="mdi:google-maps"></span>
                </div>
                <p class="overflow-hidden font-semibold text-black truncate text-15px opacity-45">{{ $event->address }}
                </p>
            </div>
        </div>
    </a>
</div>
