<div class="container mx-auto px-4">
    @foreach($trends as $trend)
    <div class="rounded border border-indigo-300 shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg">{{$trend->heading}}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$trend->created_at->diffForHumans()}}
                </p>
            </div>
        </div>
        <p class="text-gray-800">{{$trend->format}}</p>
    </div>
    @endforeach

    {{$trends->links()}}
</div>
