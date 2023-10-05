@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <div class="container">
        <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">
            @yield('title')
        </h1>
        <div class="flex flex-wrap gap-3 mt-7">
            @foreach ($categories as $category)
        
                <a href="{{ route('post_category', $category->id) }}"
                class="bg-pink grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
    
        @yield('articles')

    </div>

@endsection
