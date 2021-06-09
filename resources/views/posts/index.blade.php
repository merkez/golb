@extends('layouts.app')

@section('content')
    <div class="pt-15 w-4/5 m-auto">
        <div>
            <h1 class="text-5xl text-gray-700 font-bold pb-4">Posts</h1>
        </div>
    </div>

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/posts/create"
            class="bg-blue-500 uppercase px-5 bg-transparent text-gray-100 text-xs font-extrabold py-3 px-3 rounded-3xl">
            Create post
        </a>
    </div>
@endif
@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 py-15 mx-auto w-4/5 border-b border-gray-200">
        <div>
            <h2 class="text-gray-700 font-bold text-4xl pb-4">
                {{ $post->title }}
            </h2>
            
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> {{ $post->user->name }} </span>
            </span>
            <a href="/posts/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-xs font-extrabold py-3 px-3 rounded-3xl">
                Read
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/posts/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                    <form 
                        action="/posts/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button class="text-red-500 pr-3">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>
@endforeach
@endsection