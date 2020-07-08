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
                        Our Data Policy
                    </h1>

                    <h5 class="mt-6 text-2xl  text-justify text-gray-900 leading-9">
                        Our Service Data Policy refers to our commitment to treat information submitted to this site with the utmost care and confidentiality.

                        With this policy, we ensure that we gather, store and handle data fairly, transparently and with respect towards individual rights.
                    </h5>
                    
                    <h5 class="mt-6 text-2xl font-extrabold text-center text-gray-900 leading-9">
                        Scope
                    </h5>

                    <h5 class="mt-6 text-2xl  text-justify text-gray-900 leading-9">
                        This policy refers to all parties (users, donors, support groups etc.) who provide any amount of information to us.
                    </h5>

                    <h5 class="mt-6 text-2xl font-extrabold text-center text-gray-900 leading-9">
                        Who is covered under the Data Protection Policy?
                    </h5>

                    <h5 class="mt-6 text-2xl  text-justify text-gray-900 leading-9">
                        Employees of our company and its subsidiaries must follow this policy. Contractors, consultants, partners and any other external entity are also covered. Generally, our policy refers to anyone we collaborate with or acts on our behalf and may need occasional access to data.
                    </h5>

                    <h5 class="mt-6 text-2xl font-extrabold text-center text-gray-900 leading-9">
                        Policy elements
                    </h5>

                    <h5 class="mt-6 text-2xl  text-justify text-gray-900 leading-9">
                        As part of our operations, we need to obtain and process information. This information includes any offline or online data that makes a person identifiable such as names, addresses, usernames and passwords, digital footprints, photographs, social security numbers, financial data etc. 

                        Our company collects this information in a transparent way and only with the full cooperation and knowledge of interested parties. Once this information is available to us, the following rules apply.
                    </h5>
                    <h5 class="mt-6 text-2xl font-extrabold text-center text-gray-900 leading-9">
                        Our data will be:
                    </h5>
                    <ul class="list-disc text-2xl text-justify text-gray-900 leading-9">
                        <li>Accurate and kept up-to-date </li>
                        <li>Collected fairly and for lawful purposes only </li>
                        <li>Processed by the company within its legal and moral boundaries</li>
                        <li>Protected against any unauthorized or illegal access by internal or external parties </li>
                    </ul>

                    <h5 class="mt-6 text-2xl font-extrabold text-center text-gray-900 leading-9">
                        Our data will not be:
                    </h5>
                    <ul class="list-disc text-2xl text-left left-4 text-gray-900 leading-9">
                        <li>Communicated informally</li>
                        <li>Stored for more than a specified amount of time</li>
                        <li>Transferred to organizations, states or countries that do not have adequate data protection policies</li>
                        <li>Distributed to any party other than the ones agreed upon by the data’s owner (exempting legitimate requests from law enforcement authorities)</li>
                        <li>In addition to ways of handling the data the company has direct obligations towards people to whom the data belongs. Specifically we must: </li>
                        </ul>
                            <ul class="list-disc text-2xl text-left left-3 text-gray-900 leading-9">
                                <li>Let people know which of their data is collected </li>
                                <li>Inform people about how we’ll process their data</li>
                                <li>Inform people about who has access to their information</li>
                                <li>Have provisions in cases of lost, corrupted or compromised data</li>
                                <li>Allow people to request that we modify, erase, reduce or correct data contained in our databases </li>
                        
                            </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
