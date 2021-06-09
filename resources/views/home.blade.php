@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Tip of the Day
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    One 2012 study concluded that drinking coffee in moderation, or consuming around two 8-ounce servings per day, may protect against heart failure.
                    <br>    
                    <br>    
                    People who drank moderate amounts of coffee each day had an 11% lower risk of heart failure than those who did not.
                    <br>    
                    <br>    
                    One 2017 meta-analysisTrusted Source found that caffeine consumption may have at least a small benefit for cardiovascular health, including blood pressure.
                    <br>    
                    <br>    
                    Some studies, however, found higher levels of blood lipids (fat) and cholesterol in people who consumed more coffee.
                </p>
            </div>
        </section>
    </div>
</main>
@endsection
