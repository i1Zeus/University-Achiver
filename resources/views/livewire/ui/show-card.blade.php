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
            <button class="button">
                <a href="{{ route('main') }}">رجوع</a>
            </button>
            <button class="button" wire:click="confirm({{ $event->id }})" type="button">
                <span>حذف </span>
            </button>
            <button class="button">
                <a href="{{ route('edit-event', ['event_id' => $event->id]) }}">
                    تعديل
                </a>
            </button>
        </div>
    </div>
    <div class="basis-1/2 xl:col-span-7 rounded-3xl">
        <img src="{{ asset($event->file_path ?? '/image/Cover.jpg') }}"
            class="w-3/4 h-auto m-auto my-20 border-4 border-primary-500 rounded-3xl">
    </div>
</div>

<style scoped>
    .button {
        appearance: none;
        background-color: transparent;
        border: 0.125em solid #1A1A1A;
        border-radius: 0.9375em;
        box-sizing: border-box;
        color: #3B3B3B;
        cursor: pointer;
        display: inline-block;
        font-family: inherit;
        font-size: 14px;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        min-height: 3.75em;
        min-width: 0;
        outline: none;
        padding: 1em 2.3em;
        text-align: center;
        
        text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        will-change: transform;
    }

    .button:disabled {
        pointer-events: none;
    }

    .button:hover {
        color: #fff;
        background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        transform: translateY(-2px);
    }

    .button:active {
        box-shadow: none;
        transform: translateY(0);
    }
</style>
