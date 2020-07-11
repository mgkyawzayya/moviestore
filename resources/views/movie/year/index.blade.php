@extends('layouts.dark')

@section('content')
<div class="relative bg-black pt-6 pb-5 px-4 sm:px-6 lg:pt-10 lg:pb-2 lg:px-8">
    <div class="relative max-w-7xl mx-auto">
        <div>
            <p class="leading-5 text-center text-2xl text-white p-2 lg:p-5">Year List</p>
            <div class="mt-5 grid grid-cols-2 gap-7 sm:grid-cols-5 lg:mb-20">

                @foreach( $years as $year)
                <a href="{{ url('/movie/year/'. $year)}}">
                    <div class="bg-indigo-300 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dd class=" text-2xl text-center  text-gray-900">
                                    {{ $year }}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </a>
                @endforeach
                <a href="{{ url('/movie/year/older' )}}">
                    <div class="bg-indigo-300 overflow-hidden shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <dl>
                                <dd class=" text-2xl text-center  text-gray-900">
                                    Older
                                </dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection