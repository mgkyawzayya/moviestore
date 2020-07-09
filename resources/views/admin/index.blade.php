@extends('layouts.dashboard')
@section('content')
<div class="max-w-9xl mx-auto px-4 sm:px-6 md:px-3">
    <!-- Replace with your content -->
    <div class=" px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Movies List
                </h3>
            </div>
            <a href="{{ url('dashboard/create') }}">
                <div class="ml-4 mt-2 flex-shrink-0">
                    <span class="inline-flex rounded-md shadow-sm">
                        <button type="button" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700">
                            New
                        </button>
                    </span>
                </div>
            </a>
        </div>
    </div>
    <div class="py-4">
        <div class=" border-gray-200 rounded-lg h-96">

            <div class="flex flex-col">
                <div class=" py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Year
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Country
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Type
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Size
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach( $movies as $movie)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium text-gray-900">
                                        {{ $movie->title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        {{ $movie->year }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        {{ $movie->country }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        {{ $movie->type }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        {{ $movie->size }}
                                    </td>
                                    <td class="text-right px-6 py-4 whitespace-no-wrap  border-b border-gray-200 text-sm leading-5 font-medium">
                                        <a href="{{ url('/movies/edit/' . $movie->id ) }}" class="mr-6">
                                            <button type="button" class="bg-indigo-200 hover:bg-red text-red-darkest py-2 px-2 rounded inline-flex items-center">
                                                <svg class="w-6 h-6 mr-0" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="indigo" viewBox="0 0 24 24">
                                                    <path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                        </a>
                                        <a href="{{ url('/movies/delete/' . $movie->id ) }}" class="mr-6">
                                            <button type="button" class="bg-red-200 hover:bg-red text-red-darkest py-2 px-2 rounded inline-flex items-center">
                                                <svg class="w-6 h-6 mr-0" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="red" viewBox="0 0 24 24">
                                                    <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-4">
                    {{ $movies->links() }}
                </div>

                @if(session('success'))
                <div class="fixed bottom-0 inset-x-0 pb-2 sm:pb-5">
                    <div class="max-w-screen-xl mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="p-2 rounded-lg bg-indigo-600 shadow-lg sm:p-3">
                            <div class="flex items-center justify-between flex-wrap">
                                <div class="w-0 flex-1 flex items-center">
                                    <p class="ml-3 font-medium text-white truncate">
                                        <span class="">
                                            {{ session('success') }}
                                        </span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endif



            </div>
        </div>
    </div>
    <!-- /End replace -->
</div>
@endsection