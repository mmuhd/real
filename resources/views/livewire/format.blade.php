<div>
    <form class="my-6 flex" wire:submit.prevent="submitFormat">
    <div class="w-full p-6 my-2">
    
    <input type="text"  class="w-full rounded border border-indigo-300 shadow p-2 mr-2 my-2 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150" placeholder="Heading/Title" wire:model.debounce.500ms="heading">
          
        <textarea type="text"  class="w-full rounded border border-indigo-300 shadow p-2 mr-2 my-2 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150" placeholder="Submit a Scam Format"
            wire:model.debounce.500ms="newFormat"></textarea>     
        <div class="py-2">
            <button type="submit" class="p-2 bg-indigo-500 w-30 rounded shadow text-white border border-transparent rounded-md hover:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:shadow-outline-indigo active:bg-indigo-900 transition duration-150 ease-in-out">Submit</button>
        </div>
    </form>
    <div>
        @error('heading') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

    	@error('newFormat') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

        @if (session()->has('message'))
        <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
            {{ session('message') }}
        </div>
        @endif
    </div>
  </div>
</div>

