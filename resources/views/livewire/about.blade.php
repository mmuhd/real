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
                    <h1 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                        About Scamchekr
                    </h1>

                    <h5 class="mt-6 text-2xl  text-justify text-gray-900 leading-9">
                        Scammers and Fraudsters are becoming more sophisticated in their way of defrauding individuals of their resources, this service is built to counter that.
                    </h5>
                    <h5 class="mt-6 text-2xl  text-justify text-gray-900 leading-9">
                        Scamchekr is built to allow individuals to verify suspicious emails that manage to find ways to their inbox, users can search emails reported to be associated with Scam/Fraud, in order to avoid any dealings with them, users can also submit suspicious emails to be added to the database.

                        We will try to be constanntly updating the database with latest scam formats devised by scammers around the world.

                    </h5>
                    
                 

                </div>
            </div>
        </div>
    </div>
@endsection
