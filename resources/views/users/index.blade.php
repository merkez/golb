@extends('layouts.app')

@section('content')
    <div class="pt-15 w-4/5 m-auto">
        <div>
            <h1 class="text-5xl text-gray-700 font-bold pb-4">Users</h1>
        </div>
    </div>

    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/users/create"
            class="bg-blue-500 uppercase px-5 bg-transparent text-gray-100 text-xs font-extrabold py-3 px-3 rounded-3xl">
            Create user
        </a>
    </div>

@foreach ($users as $user)
    <div class="sm:grid grid-cols-2 gap-20 py-15 mx-auto w-4/5 border-b border-gray-200">
        <div>
            <h2 class="text-gray-700 font-bold text-4xl pb-4">
                {{ $user->name }}
            </h2>
            
            <span class="float-right">
                <a 
                    href="/users/{{ $user->slug }}/edit"
                    class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                    Edit
                </a>
            </span>

            <span class="float-right">
                <form 
                    action="/users/{{ $user->slug }}"
                    method="POST">
                    @csrf
                    @method('delete')

                    <button class="text-red-500 pr-3">
                        Delete
                    </button>

                </form>
            </span>
        </div>
    </div>
@endforeach
@endsection