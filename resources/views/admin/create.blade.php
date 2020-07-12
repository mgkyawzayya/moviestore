@extends('layouts.search')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <div class="flex flex-col">
        <form role="form" action="{{ url('movies/store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div>
                <div class="mt-0 border-gray-200 ">
                    <div class="mt-0 sm:mt-0">
                        <div class="sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="title" class=" text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Title
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-lg rounded-md shadow-sm">
                                    <input id="title" name="title" type="text" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ old('title') }}" />
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
                                    <input type="number" name="year" id="year" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ old('year') }}" />
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
                                        <option value="" {{ old('country') == '' ? "selected" : "" }}>Choose Nation</option>
                                        <option value="hollywood" {{ old('country') == 'hollywood' ? "selected" : "" }}>Hollywood</option>
                                        <option value="bollywood" {{ old('country') == 'bollywood' ? "selected" : "" }}>Bollywood</option>
                                        <option value="china" {{ old('country') == 'china' ? "selected" : "" }}>China</option>
                                        <option value="korea" {{ old('country') == 'korea' ? "selected" : "" }}>Korea</option>
                                        <option value="thai" {{ old('country') == 'thai' ? "selected" : "" }}>Thai</option>
                                        <option value="japan" {{ old('country') == 'japan' ? "selected" : "" }}>Japan</option>
                                        <option value="philippines" {{ old('country') == 'philippines' ? "selected" : "" }}>Philippines</option>
                                        <option value="others" {{ old('country') == 'others' ? "selected" : "" }}>Others</option>
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
                                    <input id="code" name="code" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ old('code') }}" />
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
                                        <option value="" {{ old('type')=='' ? "selected" : "" }}>Choose Type</option>
                                        <option value="movie" {{ old('type')=='movie' ? "selected" : "" }}>Movie</option>
                                        <option value="series" {{ old('type')=='series' ? "selected" : "" }}>Series</option>
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
                                    <input id="size" name="size" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{ old('size') }}" maxlength="4" />
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
                                        <div class="grid grid-cols-7">
                                            <div class="mt-4 col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="category" name="action" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="action" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Action</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="adults" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="adaults" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Adults</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="animation" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="animation" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Animation</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="caegory" name="adventure" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="adventure" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Adventure</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="biography" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="biography" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Biography</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="comedy" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="comedy" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Comedy</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 col-span-1 xs:col-span-1">

                                                <div class="flex items-center">
                                                    <input id="category" name="crime" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="crime" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Crime</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="documentary" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="documentary" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Documentary</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="drama" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="drama" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Drama</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 col-span-1 xs:col-span-1">
                                                <div class=" flex items-center">
                                                    <input id="category" name="fantasy" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="fantasy" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Fantasy</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="family" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="family" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Family</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="historical" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="historical" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Historical</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="mt-4 col-span-1 xs:col-span-1">
                                                <div class=" flex items-center">
                                                    <input id="caegory" name="horror" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="horror" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Horror</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="roma" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="roma" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Roma</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="caegory" name="romance" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="romance" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Romance</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 col-span-1 xs:col-span-1">
                                                <div class=" flex items-center">
                                                    <input id="category" name="scifi" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="sci-fi" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Sci-fi</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="sport" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="sport" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Sport</span>
                                                    </label>
                                                </div>
                                                <div class="mt-4 flex items-center">
                                                    <input id="category" name="thriller" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="thriller" />
                                                    <label for="category" class="ml-3">
                                                        <span class="block text-md leading-5 font-medium text-gray-700">Thriller</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 col-span-1 xs:col-span-1">
                                                <div class="flex items-center">
                                                    <input id="category" name="war" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" value="war" />
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
                                    <textarea id="description" name="description" rows="6" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        @error('description')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror

                        <div class="mt-1 sm:mt-1 sm:grid sm:grid-cols-5 sm:gap-4 sm:items-start sm:border-gray-200 sm:pt-5">
                            <label for="size" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                                Photo
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-4">
                                <div class="max-w-xs rounded-md shadow-sm">
                                    <input id="photo" name="photo" type="file" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" accept="image/png, image/jpeg" />
                                </div>
                            </div>
                        </div>

                        @error('photo')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
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
                            Save
                        </button>
                    </span>
                </div>
            </div>

        </form>
    </div>

    @if(session('success'))
    <div class="fixed bottom-0 inset-x-0 pb-2 sm:pb-5">
        <div class="max-w-screen-xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="p-2 rounded-lg bg-green-600 shadow-lg sm:p-3">
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
    <!-- /End replace -->
</div>
@endsection