<div>
    <div class="justify-between mt-[5%]">
        <div class="flex items-center justify-center w-full pt-2 xl:pr-24">
            <div class="flex flex-col w-full gap-3">
                <div class="flex flex-col gap-8">
                    <div class="flex items-center ">
                        @if ($event->state == 1)
                            <img src="{{ asset($event->image_path ?? '/image/Avatar.png') }}"
                                class="bg-white rounded-full w-90px h-90px" />
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
                                {{-- Start --}}
                                <p class="text-black opacity-[70%] text-[18px]"> {{ $event->start }}</p>
                                {{-- End --}}
                                <p class="text-black opacity-[70%] text-[18px]"> - {{ $event->end }}</p>
                                {{-- Time --}}
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
                        </div>
                    </div>
                </div>
                <div class="w-[75%] text-ellipsis capitalize px-4 text-2xl text-gray-800 xl:px-0">
                    {{ $event->description ?? 'لا يوجد وصف' }}
                </div>
                <div class="flex gap-3 mt-4 mr-8 xl:mt-10 xl:mr-4 md:gap-5">
                    <a class="button" href="{{ route('archive') }}">رجوع</a>
                    @guest
                        <a class="button" href="{{ route('addattendance', ['event_id' => $event->id]) }}">انضم للحدث</a>
                    @endguest
                    @auth
                        <button class="button" wire:click="confirm({{ $event->id }})" type="button">
                            <span>حذف </span>
                        </button>
                        <a class="button" href="{{ route('edit-event', ['event_id' => $event->id]) }}">
                            تعديل
                        </a>
                    @endauth
                    @if ($event->file_path != null)
                        <button wire:click="download({{ $event->id }})" value="{{ $event->file_path }}"
                            class="button">
                            تحميل
                            <!-- <i class="text-gray-600 fa-solid fa-trash hover:text-red-700 "></i> -->
                        </button>
                    @endif
                </div>
            </div>
            <div>
                <img src="{{ asset($event->image_loc ?? '/image/Cover.jpg') }}"
                    class="w-[80%] max-h-[80%] m-auto my-20 rounded-3xl">
            </div>
        </div>
        {{-- <div class="mt-15">{!! DNS2D::getBarcodeHTML('http://127.0.0.1:8000/addattendance/' . $event_id, 'QRCODE', 3, 3) !!}</div> --}}
    </div>
    @auth
        <div class="flex flex-col gap-4">
            <h1 class="text-lg font-bold capitalize text-secondary-900 md:text-xl xl:text-2xl">
                الحضور
            </h1>
            <div class="overflow-hidden overflow-x-auto border border-gray-200 rounded-lg">
                <table class="min-w-full text-sm divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 font-medium text-right text-gray-900 whitespace-nowrap">
                                الأسم
                            </th>
                            <th class="px-4 py-2 font-medium text-right text-gray-900 whitespace-nowrap">
                                البريد الألكتروني
                            </th>
                            <th class="px-4 py-2 font-medium text-right text-gray-900 whitespace-nowrap">
                                الصفه
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($event->attendances as $attendance)
                            <tr>
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $attendance->name }}
                                </td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $attendance->email }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $attendance->adjective }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endauth
