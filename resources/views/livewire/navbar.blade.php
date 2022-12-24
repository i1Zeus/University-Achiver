<div>
    {{-- Logo --}}
    <div class="w-full flex justify-between h-20 items-center">
        <div class="flex items-center">
            <div class="w-16 h-16">
                <img src="{{ asset('image/logo.svg') }}" alt="logo" class="w-full h-full">
            </div>
            <span class="text-5xl font-bold text-white">مكتبة السمنرات</span>
        </div>
        <div class="bx-5 ml-10 justify-between gap-3 font-semibold text-2xl">
            <a href="{{ route('main') }}">
                <span
                    class="{{ request()->is('/') ? 'opacity-100' : '' }} p-2 cursor-pointer opacity-60 hover:opacity-100 duration-150 ">الصفحة
                    الرئيسية</span>
            </a>
            <a href="{{ route('archive') }}">
                <span
                    class="{{ request()->is('archive') ? 'opacity-100' : '' }} p-2 text-black cursor-pointer opacity-60 hover:opacity-100 duration-150 ">الارشيف</span>
            </a>
            <a href="{{ route('about') }}">
                <span
                    class="{{ request()->is('about') ? 'opacity-100' : '' }} p-2 text-black cursor-pointer opacity-60 hover:opacity-100 duration-150 ">حول</span>
            </a>
        </div>
    </div>
</div>