<div>
    <div class="flex  mt-20 justify-between">
        <div class="flex mt-10 w-40% gap-24">
            <div class="flex flex-col gap-80px">
                <span class="w-600px font-semibold opacity-80 font-Tajawal text-justify text-25px">يوفر لك النظام تصفح
                    وارشفة الندوات والمؤتمرات
                    ومناقشات طلبة
                    الدراسات العليا في كلية علوم الحاسوب و
                    تكنلوجيا المعلومات / جامعة البصرة من سنة 2023</span>
                <div>

                    <form>
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-secondery-100 focus:border-secondery-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-secondery-100 dark:focus:border-secondery-100"
                                placeholder="ابحث عن حدث .." required>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="ml-10 w-200">
            <img src="/image/mainPage.png">
        </div>
    </div>
    <div class="p-50px mt-10">
        <livewire:main-page.last-events />
    </div>
</div>
