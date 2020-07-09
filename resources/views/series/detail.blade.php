@extends('layouts.dark')

@section('content')
<div class="relative bg-black pt-6 pb-20 px-4 sm:px-6 lg:pt-10 lg:pb-2 lg:px-8">
    <div class="relative max-w-7xl mx-auto">
        <div class="bg-white rounded-md shadow overflow-hidden  sm:rounded-lg">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <img class="object-cover content-center rounded-md lg:h-40 sm:h-70" src="{{ url('/images/'. $movie->photo) }}" alt="">
            </div>
            <div class="px-4 py-5 sm:p-0">
                <dl>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3">
                            Movie Name
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $movie->title }}
                        </dd>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-2 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3 xs:col-span-1">
                            Year
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $movie->year }}
                        </dd>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-2 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3">
                            Code
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$movie->code }}
                        </dd>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-2 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3">
                            Type
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$movie->type }}
                        </dd>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-2 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3">
                            Size
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$movie->size }}
                        </dd>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3">
                            Country
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $movie->country }}
                        </dd>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500 mb-3">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $movie->description }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

    </div>
</div>


@endsection