@extends('app')

@section('content')
    <div class="container flex flex-col items-center">

        <div class="flex flex-row px-6 py-3 m-5">
            <span class="font-bold text-3xl tracking-tigh capitalize">Todo App</span>
            <button class="bg-black hover:bg-gray-100 hover:text-black text-white font-semibold py-2 px-4 mx-4 border border-gray-400 rounded shadow">
                <a href="{{ url('/add') }}">Add</a>
            </button>
        </div>

        @if (session()->has('Deleted'))
            <div role="alert">
                        <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                            <p>{{ session('Deleted') }}</p>
                        </div>
            </div>
        @endif

        <table class="table-auto">
            <thead>
              <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Edit</th>
                <th class="px-4 py-2">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($todos as $todo)
              <tr>
                <td class="border px-4 py-2">{{ $todo->title }}</td>
                <td class="border px-4 py-2">
                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <a href="{{ url('/edit/'.$todo->id) }}"><img src="https://img.icons8.com/android/24/000000/edit.png"/></a>
                    </button>
                </td>
                <td class="border px-4 py-2">
                    <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <a href="{{ url('/delete/'.$todo->id) }}"><img src="https://img.icons8.com/material/24/000000/delete-forever.png"/></a>
                    </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection

