@extends('layouts.app')

@section('content')
<div class="text-center">
    <div>
        <h1 class="text-5xl text-gray-700 font-bold pb-4">Posts</h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 py-15 mx-auto w-4/5 border-b border-gray-200">
    <div>
        <h2 class="text-gray-700 font-bold text-4xl pb-4">
            Title Please
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800"> Author Please </span>
        </span>
    </div>
</div>

@endsection