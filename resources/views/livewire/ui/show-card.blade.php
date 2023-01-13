<div>
    <div class="justify-between mt-[5%]">
        <div class="flex w-full pt-2 xl:pr-24">
            <div class="flex flex-col w-full gap-3">
                <div class="flex justify-between">
                    <h1 class="p-3 text-2xl font-bold text-secondary-900 md:text-3xl xl:text-5xl">
                        {{ $event->title }}
                    </h1>
                </div>
                <div class="w-full px-4 text-xl text-gray-700 xl:px-0">
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
                <img src="{{ asset($event->file_path ?? '/image/Cover.jpg') }}"
                    class="w-full h-auto m-auto my-20 border-2 border-black rounded-3xl">
            </div>
        </div>
<<<<<<< HEAD
        <div class="px-4 text-xl text-gray-600 xl:px-0">
            {{ $event->description ?? 'لا يوجد وصف' }}
        </div>
        <div class="flex gap-3 mt-4 mr-8 xl:mt-10 xl:mr-4 md:gap-5">
            <a href="{{ route('archive') }}"
                class="hover:text-white text-base xl:text-2xl duration-200 hover:bg-primary-500 bg-white border hover:border-transparent border-green-500 text-primary-500 focus:ring-2 focus:ring-primary-300 rounded-lg px-5 py-2.5 mr-2 mb-2 ">رجوع</a>
        </div>
        <button wire:click="confirm({{ $event->id }})" type="button"
                                class="block px-6 py-2 my-1 hover:bg-gray-100 text-secondary-200 group">
                                <span>حذف </span>
                                <i
                                    class="text-red-500 fa-solid  fa-pen-to-square text-xl duration-200 group-hover:text-red-700 fa-solid fa-trash"></i>
                            </button>
                            <a href="{{ route('edit-event', ['event_id' => $event->id]) }}">
                                    <i class="fa-solid fa-pen-to-square text-gray-600   hover:text-blue-700"></i>
                                    edit
                                </a>
=======
>>>>>>> origin/iZeus
    </div>
    <div>
        الحضور
    </div>
</div>
