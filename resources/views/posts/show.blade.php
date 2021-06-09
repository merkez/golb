@extends('layouts.app')

@section('content')
    <div class="sm:grid grid-cols-2 gap-20 py-15 mx-auto w-4/5 border-b border-gray-200">
        <div>
            <h2 class="text-gray-700 font-bold text-4xl pb-4">
                {{ $post->title }}
            </h2>
            
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> {{ $post->user->name }} </span>
            </span>
        </div>
    </div>

    <div class="pt-15 w-4/5 m-auto">
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>

@endsection