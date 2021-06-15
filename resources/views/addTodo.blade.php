@extends('app')

@section('content')
    <div class="flex flex-col justify-center items-center center">

        <div class="flex flex-row px-6 py-3 m-5">
            <span class="font-bold text-3xl tracking-tigh capitalize">Add Todo</span>
        </div>

            @if (session()->has('success'))
            <div role="alert">
                    <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                            <p>{{ session('success') }}</p>
                    </div>
                </div>
            @endif
        <form class="w-full max-w-sm flex flex-col" action="{{ url('/add') }}"  method="POST">
            @csrf
            <div class="flex items-center border-b border-black w-6/6 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" name="todo" value="{{ old('todo') }}" type="text" placeholder="Type your task..." aria-label="Full name" required>
                <button class="flex-shrink-0 bg-black text-sm border-4 text-white py-1 px-2 rounded" name="save" type="submit">
                    Save
                </button>
                <button class="flex-shrink-0 border-transparent border-4 text-black hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                    <a href="{{ url('/') }}"> Back </a>
                </button>
            </div>
        </form>
    </div>
@endsection

