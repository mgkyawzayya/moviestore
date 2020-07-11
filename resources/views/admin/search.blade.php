@extends('layouts.search')
@section('content')

<div class="max-w-full mx-auto px-4 sm:px-6 md:px-8">
    <div class="py-4">
        @if(isset($details))
        <div class=" border-gray-200 rounded-lg h-96">
            <p class="leading-5 text-center text-2xl p-6 lg:p-5">Search results for " {{ $query }} "</p>
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
                                @foreach( $details as $movie)
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
                    {{ $details->links() }}
                </div>
            </div>
        </div>
        @endif


        @if(isset($message))

        <p class="leading-5 text-center text-2xl p-6 lg:p-10">{{ $message }}</p>

        @endif
    </div>
</div>
@endsection