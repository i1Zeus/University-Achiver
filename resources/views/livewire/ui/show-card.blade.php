<div>
    <div class="justify-between mt-[5%]">
        <div class="flex items-center justify-center w-full pt-2 xl:pr-24">
            <div class="flex flex-col w-full gap-3">
                <div class="flex items-center ">
                    <img src="{{ asset($event->image_path ?? '/image/Avatar.png') }}" class="w-[125px] border-secondery-200 rounded-full">
                    <h1 class="p-3 text-4xl font-bold capitalize text-secondary-900 md:text-3xl xl:text-5xl">
                        {{ $event->title }}
                    </h1>
                </div>

                <div class="w-full px-4 text-2xl text-gray-800 xl:px-0">
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
                    class="w-full m-auto my-20 border-2 border-secondery-200 rounded-3xl">
            </div>
        </div>
    </div>
    <div>
        الحضور
    </div>
</div>
