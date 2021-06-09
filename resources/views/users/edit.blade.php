@extends('layouts.app')

@section('content')
    <div class="pt-15 w-4/5 m-auto">
        <div>
            <h1 class="text-5xl text-gray-700 font-bold pb-4">Edit User</h1>
        </div>
    </div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
@endif

    <div class="pt-20 w-4/5 m-auto">
        <form
            action="/users/{{ $user->slug }}"
            method="POST">
            @csrf
            @method('PUT')
            <input
                type="text"
                name="name"
                placeholder="name"
                value="{{ $user->name }}"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            
            <input
                type="text"
                name="email"
                placeholder="email"
                value="{{ $user->email }}"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <button 
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-m font-extrabold py-3 px-3 rounded-3xl">
                Submit
            </button>
            </div>
        </form>
    </div>

@endsection