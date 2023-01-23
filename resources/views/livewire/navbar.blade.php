<div>
    {{-- Logo --}}
    <div class="flex items-center justify-between w-full h-20">
        <div class="flex items-center">
            <div class="w-16 h-16">
                <img src="{{ asset('image/logo.svg') }}" alt="logo" class="w-full h-full">
            </div>
            <span class="text-5xl font-bold text-white">مكتبة السمنرات</span>
        </div>
        <div class="flex items-center justify-between gap-3 ml-10 text-2xl font-semibold bx-5">
            <a href="{{ route('main') }}">
                <span
                    class="{{ request()->is('/') ? '!opacity-100' : '' }} p-2 cursor-pointer opacity-60 hover:opacity-100 duration-150 ">الصفحة
                    الرئيسية</span>
            </a>
            <a href="{{ route('archive') }}">
                <span
                    class="{{ request()->is('archive') ? '!opacity-100' : '' }} p-2 text-black cursor-pointer opacity-60 hover:opacity-100 duration-150 ">الارشيف</span>
            </a>
            <a href="{{ route('about') }}">
                <span
                    class="{{ request()->is('about') ? '!opacity-100' : '' }} p-2 text-black cursor-pointer opacity-60 hover:opacity-100 duration-150 ">حول</span>
            </a>
            <!-- hidden if user is logged in -->
            @if (!Auth::check())
                <a href="{{ route('login') }}" class="flex items-center duration-150 cursor-pointer opacity-60 hover:opacity-100 ">
                    @livewire('components.login')
                </a>
            @else
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="flex items-center duration-150 cursor-pointer opacity-60 hover:opacity-100">
                        @livewire('components.logout')
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
