<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#7843E9">
    <meta name="msapplication-TileColor" content="#7843E9">
    <meta name="theme-color" content="#7843E9">

    <title>@yield('title')</title>

    @vite('resources/js/app.js')
</head>
<body class="antialiased">


    @include('include.header')
    
    <main class="py-16 lg:py-20">

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

@include('include.footer')

</body>
</html>

