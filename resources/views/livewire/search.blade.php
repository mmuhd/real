<div>
    <form class="my-6 flex" wire:submit.prevent="searchEmail">
        <input type="text"  class="w-full rounded border shadow p-2 mr-2 my-2 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150" placeholder="Search Scam Email"
            wire:model.debounce.500ms="searchNewEmail">
        <div class="py-2">
            <button type="submit" class="p-2 bg-indigo-500 w-20 rounded shadow text-white border border-transparent rounded-md hover:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:shadow-outline-indigo active:bg-indigo-900 transition duration-150 ease-in-out">Search</button>
        </div>
    </form>
    <div>
        @error('searchNewEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        
        @if (session()->has('danger_message'))
        <div class="p-3 bg-red-300 text-red-800 rounded shadow-sm">
            {{!! session('danger_message') !!}}
        </div>
        @endif
        @if (session()->has('warning_message'))
        <div class="p-3 bg-orange-300 text-orange-800 rounded shadow-sm">
            {{!! session('warning_message') !!}}
            <a class="text-blue-800" href="{!! url('/submit') !!}">Submit it</a>
        </div>
        @endif
    </div>
</div>
