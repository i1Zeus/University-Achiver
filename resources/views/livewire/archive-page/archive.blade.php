<div>
    <div class="flex justify-center items-center mt-25 w-full h-full">
        <div class="flex flex-col gap-28 justify-center items-center">
            <form>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-700px p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-secondery-100 focus:border-secondery-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-secondery-100 dark:focus:border-secondery-100"
                        placeholder="ابحث عن حدث .." required>
                </div>
            </form>

            <div class="grid gap-12 justify-evenly grid-cols-1 md:grid-cols-3 pb-20">
                @for ($i = 1; $i <= 6; $i++)
                    <livewire:ui.event-card />
                @endfor
            </div>
        </div>
    </div>
</div>
