<div>
    <div class="justify-between mt-[5%]">
        <div class="flex items-center justify-center w-full pt-2 xl:pr-24">
            <div class="flex flex-col w-full gap-3">
                <div class="flex flex-col gap-8">
                    <div class="flex items-center ">
                        @if ($event->state == 1)
                            <img src="{{ asset($event->image_path) }}" class="w-[120px] rounded-full">
                        @endif
                        <h1 class="p-3 text-4xl font-bold capitalize text-secondary-900 md:text-3xl xl:text-5xl">
                            {{ $event->title }}
                        </h1>
                    </div>
                    <div>
                        <div class="flex flex-col items-start justify-start">
                            {{-- Event Date --}}
                            <div class="flex items-center w-[80%] gap-5px">
                                <span class="!w-[24px] !h-[24px] iconify text-gray-700 text-24px"
                                    data-icon="ph:clock-fill"></span>
                                <p class="text-black opacity-[70%] text-[18px]"> {{ $event->start }}</p>
                                <p class="text-black opacity-[70%] text-[18px]"> - {{ $event->end }}</p>
                                <p class="text-black opacity-[70%] text-[18px]"> - {{ $event->time }}</p>
                            </div>
                            {{-- Event Location --}}
                            <div class="flex items-center w-[80%] gap-5px">
                                <div>

                                    <span class="iconify !w-[24px] !h-[24px] text-gray-700 text-[24px]"
                                        data-icon="mdi:google-maps"></span>
                                </div>
                                <p class="overflow-hidden text-black truncate text-[18px] opacity-[70%]">
                                    {{ $event->address }}
                                </p>
                            </div>
                            <!-- الوقت  -->
                            <div class="flex items-center w-[62%] gap-5px">
                                <span class="iconify !w-[24px] !h-[24px] text-secondery-100 text-[24px]"
                                    data-icon="mdi:clock-outline"> </span>
                                    <p class="overflow-hidden text-black truncate text-[18px] opacity-[70%]">
                                    {{ $event->time }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-[75%] text-ellipsis px-4 text-2xl text-gray-800 xl:px-0">
                    {{ $event->description ?? 'لا يوجد وصف' }}
                </div>
                <div class="flex gap-3 mt-4 mr-8 xl:mt-10 xl:mr-4 md:gap-5">
                    <a class="button" href="{{ route('archive') }}">رجوع</a>

                    <button class="button" wire:click="confirm({{ $event->id }})" type="button">
                        <span>حذف </span>
                    </button>
                    <a class="button" href="{{ route('edit-event', ['event_id' => $event->id]) }}">
                        تعديل
                    </a>
                </div>
            </div>
            <div>
                <img src="{{ asset($event->image_loc ?? '/image/Cover.jpg') }}"
                    class="w-[80%] max-h-[80%] m-auto my-20 rounded-3xl">
            </div>
        </div>
    </div>
    <div>
        الحضور
    </div>
</div>
