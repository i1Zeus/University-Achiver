<div class="relative py-3 sm:max-w-xl sm:mx-auto" dir="ltr">
    <div class="relative px-4 py-10 mx-8 mt-12 bg-white shadow md:mx-0 rounded-3xl sm:p-10">
        <form wire:submit.prevent="add">
            <div class="max-w-md mx-auto text-right">
                <div class="flex items-center gap-4 space-x-5">
                    <div
                        class="flex items-center justify-center flex-shrink-0 font-mono text-2xl text-yellow-500 bg-yellow-200 rounded-full h-14 w-14">
                        i</div>
                    <div class="self-start block pl-2 text-xl font-semibold text-gray-700">
                        <h2 class="leading-relaxed">انضم للحدث</h2>
                    </div>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="flex flex-col">
                            <label class="leading-loose">الاسم </label>
                            <input wire:model.lazy="name" required type="text"
                                class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">البريد الالكتروني </label>
                            <input wire:model.lazy="email" required type="email"
                                class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                        </div>
                        <div>
                            <label class="leading-loose">الصفة </label>
                            <input wire:model.lazy="adjective" required type="text"
                                class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                        </div>
                        <div class="flex items-center pt-4 space-x-4">
                            <a href="{{ route('archive') }}">
                                <div
                                    class="flex items-center justify-center w-full px-4 py-3 text-gray-900 duration-150 rounded-md hover:bg-black hover:text-white hover:shadow-md focus:outline-none">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    <span>الغاء</span>
                                </div>
                            </a>
                            <button type="submit"
                                class="flex items-center justify-center w-full px-4 py-3 text-black duration-150 bg-yellow-300 rounded-md opacity-50 hover:shadow-md hover:opacity-100 focus:outline-none">
                                <span>انشئ</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
