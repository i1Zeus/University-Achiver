<div>
    <a class="relative flex flex-col duration-150 bg-white shadow-md cursor-pointer hover:shadow-lg gap-10px p-20px w-340px h-350px rounded-15px hover:scale-105"
        href="{{ route('show-card', ['event_id' => $event->id]) }}">
        {{-- Place Image --}}
        <img src="{{ asset($event->file_path ?? '/image/Cover.jpg') }}" class="bg-black rounded-md w-300px h-150px" />
        @if (asset($event->image_path) != null)
            <div class="flex gap-30px">
                {{-- Client Iamge --}}
                <img src="{{ asset($event->image_path ?? '/image/Avatar.png') }}"
                    class="absolute bg-red-100 rounded-full w-90px h-90px top-30 left-55" />
                {{-- Cilent Name --}}
                <span class="text-24px font-bold text-black absolute top-45 right-33 w-140%">{{ $event->title }}</span>
            </div>
        @endif

        @if (asset($event->image_path) == null)
            {{-- Cilent Name --}}
            <span class="text-24px font-bold text-black absolute top-45 right-[25px] w-140%">{{ $event->title }}</span>
        @endif

        {{-- Client Description --}}
        @if ($event->description)
            <span class="m-auto mt-10 overflow-hidden font-semibold text-md opacity-60">{{ $event->description }}</span>
        @endif

        <div class="flex justify-between">
            {{-- Event Date --}}
            <div class="flex items-center justify-end gap-5px">
                <span class="!w-[20px] !h-[20px] iconify text-secondery-100 text-20px" data-icon="ph:clock-fill"></span>
                <span class="font-semibold text-black text-15px opacity-45"> {{ $event->start }}</span>
            </div>
            {{-- Event Location --}}
            <div class="flex items-center justify-end gap-5px">
                <span class="iconify !w-[20px] !h-[20px] text-secondery-100 text-20px"
                    data-icon="mdi:google-maps"></span>
                <span class="font-semibold text-black text-15px opacity-45">{{ $event->address }}</span>
            </div>
        </div>
    </a>

</div>
