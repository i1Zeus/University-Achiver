<div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="relative px-4 py-10 mx-8 mt-12 bg-white shadow md:mx-0 rounded-3xl sm:p-10">
        <form wire:submit.prevent="add">
            <div class="max-w-md mx-auto">
                <div class="flex items-center gap-4 space-x-5">
                    <div
                        class="flex items-center justify-center flex-shrink-0 font-mono text-2xl text-yellow-500 bg-yellow-200 rounded-full h-14 w-14">
                        i</div>
                    <div class="self-start block pl-2 text-xl font-semibold text-gray-700">
                        <h2 class="leading-relaxed">اضافه حدث</h2>
                    </div>
                </div>
                <div class="divide-y divide-gray-200">
                    <!--  -->
                    <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="flex flex-col">
                            <label class="leading-loose">
                                @if ($state == 0)
                                    عنوان الندوة
                                @else
                                    عنوان المناقشة
                                @endif
                            </label>
                            <input wire:model.lazy="title" required type="text"
                                class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none"
                                placeholder="مناقشه بحث تخرج">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">موقع الحدث</label>
                            <input wire:model.lazy="address" required type="text"
                                class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none"
                                placeholder="بصره - المعقل - قاعه الملوك">
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1/2 md:col-span-2">
                                <label class="leading-loose"> نوع الحدث </label>
                                <select wire:model.lazy="state" required type="text"
                                    class="w-full px-6 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none ">
                                    <option> اختر نوع الحدث</option>
                                    <option value="0">ندوة</option>
                                    <option value="1"> مناقشة بحث</option>
                                </select>
                            </div>
                            <div class="flex-col w-1/2">
                                <label class="leading-loose">وقت الحدث</label>
                                <div class="relative text-gray-400 focus-within:text-gray-600">
                                    <input wire:model.lazy="time" required type="time"
                                        class="w-full py-2 pl-10 pr-4 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            @if ($state == 0)
                                <div class="flex items-center gap-3">
                                    <div class="flex gap-3 my-6 ">
                                        <label class="leading-loose">من</label>
                                        <div class="relative text-gray-400 focus-within:text-gray-600">
                                            <input wire:model.lazy="start" required type="date"
                                                class="w-full py-2 pl-10 pr-4 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                                        </div>
                                    </div>
                                    <div class="flex gap-3 my-6 ">
                                        <label class="leading-loose">الى</label>
                                        <div class="relative text-gray-400 focus-within:text-gray-600">
                                            <input wire:model.lazy="end" required type="date"
                                                class="w-full py-2 pl-10 pr-4 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="flex flex-col justify-end mb-2 ">
                                    <label class="leading-loose">التاريخ</label>
                                    <div class="relative text-gray-400 focus-within:text-gray-600">
                                        <input wire:model.lazy="start" required type="date" required
                                            class="w-1/2 py-2 pl-10 pr-4 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none">
                                    </div>
                                </div>
                            @endif
                            <div class="flex flex-col">
                                <label class="leading-loose">وصف الحدث</label>
                                <textarea wire:model.lazy="description" type="text"
                                    class="w-full px-4 py-2 text-gray-600 border border-gray-300 rounded-md focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm focus:outline-none"
                                    placeholder="اختياري">
                        </textarea>
                            </div>
                            <div class="flex items-center justify-end gap-4 p-t-2">
                                @if ($state == 1)
                                    <div class="flex justify-center ">
                                        <div class="text-center ">
                                            <label
                                                class="w-full flex flex-col items-center duration-100 hover:shadow-md @if ($image_path) bg-primary-200 text-black @else bg-white @endif rounded-lg tracking-wide p-2 cursor-pointer hover:bg-primary-200 text-black">
                                                <div wire:target="image_path">
                                                </div>
                                                <span class="text-base leading-normal ">
                                                    @if ($image_path)
                                                        تم اختيار صورة شخصية
                                                    @else
                                                        إختر صورة شخصية
                                                    @endif
                                                </span>
                                                <input wire:model.lazy="image_path" type="file" class="hidden" />
                                            </label>
                                            @error('image_path')
                                                <span
                                                    class="px-2 py-1 text-xs rounded-lg error text-primary-600 bg-primary-100">لم
                                                    يتم تحميل
                                                    الصورة</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif
                                <div class="flex justify-center ">
                                    <div class="text-center ">
                                        <label
                                            class="w-full flex flex-col items-center duration-100 hover:shadow-md @if ($image_loc) bg-primary-200 text-black @else bg-white @endif rounded-lg tracking-wide p-2 cursor-pointer hover:bg-primary-200 text-black">
                                            <div wire:target="image_loc">
                                            </div>
                                            <span class="text-base leading-normal ">
                                                @if ($image_loc)
                                                    تم اختيار صورة الموقع
                                                @else
                                                    إختر صورة الموقع
                                                @endif
                                            </span>
                                            <input wire:model.lazy="image_loc" type="file" class="hidden" />
                                        </label>
                                        @error('image_loc')
                                            <span
                                                class="px-2 py-1 text-xs rounded-lg error text-primary-600 bg-primary-100">لم
                                                يتم تحميل
                                                الصورة</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- ? file --}}
                                <label for="file" class="cursor-pointer mt-1 duration-150 hover:text-[#16a085]">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <input wire:model.lazy="file_path" type="file" class="hidden" id="file">
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center pt-4 space-x-4">
                            <a href="{{ route('archive') }}" class="">
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
