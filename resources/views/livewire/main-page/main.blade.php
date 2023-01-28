<div>
    {{-- Mian Page Code  --}}
    <div class="flex justify-between mt-20">
        <div class="flex mt-10 w-40% gap-24">
            <div class="flex flex-col gap-80px">
                <span class="font-semibold leading-loose text-justify w-600px opacity-80 font-Tajawal text-25px">يوفر لك
                    النظام تصفح
                    وارشفة الندوات والمؤتمرات
                    ومناقشات طلبة
                    الدراسات العليا في كلية علوم الحاسوب و
                    تكنلوجيا المعلومات / جامعة البصرة من سنة 2023</span>
                <div>
                    <div class="relative">
                        @livewire('ui.search')
                    </div>
                    @if ($search)
                        <div class="absolute">
                            <div class="grid grid-cols-1 gap-12 pb-20 justify-evenly md:grid-cols-3">
                                <div class="flex flex-col p-2 mt-2 bg-white rounded-lg shadow-lg h-fit w-fit">
                                    @forelse ($events as $event)
                                        <a href="{{ route('show-card', $event->id) }}"
                                            class="flex items-center gap-10 p-1 truncate duration-150 bg-white rounded-sm hover:bg-primary-100 hover:bg-opacity-50">
                                            <div>
                                                {{ $event->title }}
                                            </div>
                                            <div>
                                                {{ $event->start }}
                                            </div>
                                            <div>
                                                {{ $event->time }}
                                            </div>
                                            <div>
                                                @if ($event->state == 1)
                                                    <p>مناقشة بحث</p>
                                                @else 
                                                <p>ندوة</p>
                                                @endif
                                            </div>
                                            <div>
                                                {{ $event->address }}
                                            </div>
                                        </a>
                                    @empty
                                        <h1 class="text-lg font-bold !bg-transparent ">لا توجد نتائج</h1>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="ml-10 w-180">
            <img src="/image/mainPage.png">
        </div>
    </div>
    <div class="mt-20 p-50px">
        <livewire:main-page.last-events />
    </div>
</div>
