@extends('layouts.dark')

@section('content')
<div class="relative bg-black pt-6 pb-5 px-4 sm:px-6 lg:pt-10 lg:pb-2 lg:px-8">
    <div class="relative max-w-7xl mx-auto">
        <div class="grid grid-cols-3 mb-2">
            <a href="{{ url('movie/year') }}" class="flex flex-col rounded shadow overflow-hidden mr-3">
                <div class="flex-1 bg-gray-800 p-4 flex flex-col justify-center">
                    <div class="flex-1 grid grid-cols-2">
                        <p class="text-sm leading-5 font-medium text-white">
                            Years
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{ url('movie/category') }}" class="flex flex-col rounded shadow overflow-hidden mr-3">
                <div class="flex-auto bg-gray-800 p-4 flex flex-col justify-center">
                    <div class="flex-1 grid grid-cols-2">
                        <p class="text-sm leading-5 font-medium text-white">
                            Category
                        </p>
                    </div>
                </div>
            </a>
            <a href="{{ url('movie/country') }}" class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-auto bg-gray-800 p-4 flex flex-col justify-center">
                    <div class="flex-1 grid grid-cols-2">
                        <p class="text-sm leading-5 text-center font-medium text-white">
                            Country
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <p class="leading-5 text-center text-2xl text-white p-6 lg:p-10 mb-2">{{ $count }} movies in Movie List</p>
        <div class="mt-0 grid gap-5 max-w-lg mx-auto grid-cols-2 lg:grid-cols-5 lg:max-w-none">

            @foreach( $movies as $movie)
            <a href="{{ url('/movies/detail/'. $movie->id)}}" class="flex flex-col rounded shadow overflow-hidden lg:mr-10 lg:mb-10">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ url('images/'. $movie->photo) }}" alt="" />
                </div>
                <div class="flex-1 bg-gray-800 p-2 flex flex-col justify-between">
                    <div class="flex-1">
                        <p class="text-sm leading-5 font-medium text-white">
                            <span class="">
                                {{ $movie->title }}
                            </span>
                        </p>
                        <br>
                        <p class="text-sm leading-5 font-medium text-center text-white">
                            <span class="">
                                Year - {{ $movie->year }}
                            </span>
                        </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>

    <div class="mt-4">
        {{ $movies->links() }}
    </div>
</div>


@endsection