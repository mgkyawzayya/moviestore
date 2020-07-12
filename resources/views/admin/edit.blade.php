@extends('layouts.search')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

    <div class="flex flex-col">
        <form role="form" action="{{ url('movies/update') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $movie->id }}">

            <div>
                <div class="mt-0 border-gray-200 ">
                    <div class="mt-0 sm:mt-0">
                        <div class="sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="title" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Title
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-lg rounded-md shadow-sm">
                                    <input id="title" name="title" type="text" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $movie->title }}" />
                                </div>
                            </div>
                        </div>
                        @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="year" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Year
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xs rounded-md shadow-sm">
                                    <input type="number" name="year" id="year" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $movie->year }}" />
                                </div>
                            </div>
                        </div>

                        @error('year')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="country" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Country
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xs rounded-md shadow-sm">
                                    <select id="country" name="country" class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="" {{ $movie->country == '' ? "selected" : "" }}>Choose Nation</option>
                                        <option value="hollywood" {{ $movie->country == 'hollywood' ? "selected" : "" }}>Hollywood</option>
                                        <option value="bollywood" {{ $movie->country == 'bollywood' ? "selected" : "" }}>Bollywood</option>
                                        <option value="china" {{ $movie->country == 'china' ? "selected" : "" }}>China</option>
                                        <option value="korea" {{ $movie->country == 'korea' ? "selected" : "" }}>Korea</option>
                                        <option value="thai" {{ $movie->country == 'thai' ? "selected" : "" }}>Thai</option>
                                        <option value="japan" {{ $movie->country == 'japan' ? "selected" : "" }}>Japan</option>
                                        <option value="philippines" {{ $movie->country == 'philippines' ? "selected" : "" }}>Philippines</option>
                                        <option value="others" {{ $movie->country == 'others' ? "selected" : "" }}>Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @error('country')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="code" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Code
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xs rounded-md shadow-sm">
                                    <input id="code" name="code" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $movie->code }}" />
                                </div>
                            </div>
                        </div>

                        @error('code')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="type" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Type
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xs rounded-md shadow-sm">
                                    <select id="type" name="type" class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        <option value="" {{ $movie->type == '' ? "selected" : "" }}>Choose Type</option>
                                        <option value="movie" {{ $movie->type == 'movie' ? "selected" : "" }}>Movie</option>
                                        <option value="series" {{ $movie->type == 'series' ? "selected" : "" }}>Series</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        @error('type')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="size" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Size
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xs rounded-md shadow-sm">
                                    <input id="size" name="size" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ $movie->size }}" maxlength="4" />
                                </div>
                            </div>
                        </div>
                        @error('size')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                        <div class="mt-1 sm:mt-1 sm:border-gray-200 pt-3">
                            <fieldset>
                                <div class="sm:grid sm:grid-cols-5 sm:gap-4 sm:items-baseline">
                                    <div>
                                        <legend class="text-base leading-6 font-medium text-gray-900 sm:text-sm sm:leading-5 sm:text-gray-700">
                                            Generes
                                        </legend>
                                    </div>
                                    <div class=" sm:col-span-4">
                                        <div class="sm:grid sm:grid-cols-5">
                                            <div class="mt-4 sm:col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="category" name="action" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="action" {{ $movie->action == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Action</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="adults" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="adaults" {{ $movie->adults == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Adults</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="animation" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="animation" {{ $movie->animation == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Animation</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="adventure" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="adventure" {{ $movie->adventure == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Adventure</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 sm:col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="caegory" name="biography" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="biography" {{ $movie->biography == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Biography</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="comedy" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="comedy" {{ $movie->comedy == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Comedy</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="crime" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="crime" {{ $movie->crime == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Crime</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="documentary" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="documentary" {{ $movie->documentary == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Documentary</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 sm:col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="caegory" name="drama" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="drama" {{ $movie->drama == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Drama</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="fantasy" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="fantasy" {{ $movie->fantasy == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Fantasy</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="family" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="family" {{ $movie->family == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Family</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="historical" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="historical" {{ $movie->historical == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Historical</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 sm:col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="caegory" name="horror" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="horror" {{ $movie->horror == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Horror</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="roma" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="roma" {{ $movie->roma == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Roma</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="romance" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="romance" {{ $movie->romance == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Romance</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="scifi" {{ $movie->scifi == 1 ? "checked" : "" }} type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="sci-fi" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Sci-fi</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 sm:col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="category" name="sport" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="sport" {{ $movie->sport == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Sport</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="thriller" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="thriller" {{ $movie->thriller == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Thriller</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="war" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="war" {{ $movie->war == 1 ? "checked" : "" }} />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">War</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="about" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Description
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xl flex rounded-md shadow-sm">
                                    <textarea id="description" name="description" rows="6" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{ $movie->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                        <input type="hidden" name="photo" value="{{ $movie->photo }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="mt-4 border-t border-gray-200 pt-5">
                <div class="flex justify-center">
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ url('dashboard') }}">
                            <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                Cancel
                            </button>
                        </a>
                    </span>
                    <span class="ml-3 inline-flex rounded-md shadow-sm">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Update
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </div>

    @if(session('success'))
    <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection