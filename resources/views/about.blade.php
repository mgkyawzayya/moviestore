@extends('layouts.dark')

@section('content')
<div class="relative bg-black pt-2 pb-5 px-4 sm:px-6 lg:pt-10 lg:pb-2 lg:px-8">
    <div class="relative max-w-7xl mx-auto">
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <li class="col-span-1 flex flex-col text-center  rounded-lg shadow">
                <div class="flex-1 flex flex-col p-8">
                    <img class="w-60 h-60 flex-shrink-0 mx-auto bg-black rounded-lg " src="{{ url('img/logo/drfone.svg') }}" alt="">
                    <h6 class="mt-8 mb-1 text-gray-100 text-4xl leading-10 font-sans">Phone Services </h6>
                    <h6 class="mt-2 mb-1 text-gray-100 text-4xl leading-10 font-sans">& </h6>
                    <h6 class="mt-2 mb-1 text-gray-100 text-4xl leading-10 font-sans">Accessories </h6>
                    <h3 class="mt-6 mb-10 text-gray-100 text-2xl leading-10 font-sans">အမှတ်(၆) ၊ ၅ လမ်း နှင့် ၆ လမ်းကြား ၊ မြိုင်လမ်းဘေး ၊ ပခုက္ကူမြို့။ </h3>
                </div>
                <div class="mt-10 border-t border-gray-800 mb-32">
                    <div class="-mt-px flex">
                        <div class="w-0 flex-1 flex border-r border-gray-800">
                            <a href="tel:09970185220" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-100 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="gray">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span class="ml-3">Call</span>
                            </a>
                        </div>
                        <div class="-ml-px w-0 flex-1 flex">
                            <a href="tel:09256230585" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-100 font-medium border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="gray">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <span class="ml-3">Call</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    @endsection