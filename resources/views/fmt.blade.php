@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="absolute top-0 left-2 mt-4 mr-4">
            <a href="{{ route('home') }}">
                        <img class="w-auto h-16 mx-auto text-indigo-600" src="/img/scamchekr.png" 
                        alt="" />
                    </a>
        </div>      
        <div class="absolute top-3 right-0 mt-4 mr-4">
                <div class="space-x-4">
                        
                        <a href="/about" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">About</a>

                            <a href="/policy" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Data Policy</a>
                </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                        Submit Scam Email Format
                    </h2>

                    <livewire:format />

                    <ul class="list-reset">
                        <li class="inline px-6">
                            <a href="/sub" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Submit Email</a>
                        </li>
                        <li class="inline px-6">
                            <a href="/fmt" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Scam Formats</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
