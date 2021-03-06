<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteDescription }}"/>

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

@stack('meta')

@if ($page->production)
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-34189472-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-34189472-1');
        </script>
    @endif

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="stylesheet" href="/assets/build/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="flex flex-col justify-between min-h-screen text-gray-800 leading-normal font-sans pt-24">
<header class="flex items-center shadow bg-white border-b h-24 py-4 fixed left-0 right-0 top-0 z-10" role="banner">
    <div class="flex items-center w-full px-4 lg:px-8">
        <div class="flex items-center">
            <a href="/" title="davidhallin.com home" class="inline-flex items-center">
                <h1 class="text-lg md:text-2xl text-gray-800 font-mono font-semibold hover:text-blue-600 my-0">davidhallin.com</h1>
            </a>
        </div>

        <div id="vue-search" class="flex flex-1 justify-end items-center">
            <search></search>

            @include('_nav.menu-toggle')
        </div>
    </div>
</header>

@include('_nav.menu-responsive')

<main role="main" class="flex-auto w-full container max-w-8xl mx-auto py-16 px-6 flex">
    @include('_nav.menu-sidebar')
    <div class="pl-0 lg:pl-10 w-full">
        @yield('body')
    </div>
</main>

<footer class="bg-white text-center text-sm mt-12 py-2 px-4">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div >
            &copy; David Hallin {{ date('Y') }}.
        </div>
        <ul class="flex flex-col lg:flex-row justify-end list-none">
            <li class="mx-4">
                built with  <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>, and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
            </li>
            <li class="mx-4">
                tools icon made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            </li>
        </ul>
    </div>
</footer>

<script src="{{ mix('js/main.js', 'assets/build') }}"></script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@stack('scripts')
</body>
</html>
