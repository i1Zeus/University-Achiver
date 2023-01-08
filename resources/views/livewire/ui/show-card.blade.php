<div class="grid justify-between grid-cols-1 xl:grid-cols-12">
    <div class="col-span-5 pt-2 basis-1/2 xl:pr-24 ">
        <div class="flex justify-between">
            <h1 class="p-3 text-2xl font-bold text-secondary-900 md:text-3xl xl:text-5xl">
                {{ $event->title }}
            </h1>
        </div>
        <div class="px-4 text-xl text-gray-600 xl:px-0">
            {{ $event->description ?? 'لا يوجد وصف' }}
        </div>
        <div class="flex gap-3 mt-4 mr-8 xl:mt-10 xl:mr-4 md:gap-5">
            <a href="{{ route('main') }}"
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
    </div>
    <div class="basis-1/2 xl:col-span-7 rounded-3xl">
        <img src="{{ asset($event->file_path ?? '/image/Cover.jpg') }}"
            class="w-3/4 h-auto m-auto my-20 border-4 border-primary-500 rounded-3xl">
    </div>
</div>
