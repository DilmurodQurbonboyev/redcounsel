<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/videoGalery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ tr('Video Gallery') }}</title>
</head>

<body>
    <div class="nav">
        <x-frontend.header />
        <div class="bg-videoGalery"></div>
        <div class="ourTeam">
            <h2>{{ tr('Video Gallery') }}</h2>
            <p><a href="/">{{ tr('Home') }} </a> / {{ tr('Video Gallery') }}</p>
        </div>
    </div>

    <main>
        @foreach ($lists as $list)
            <div class="video-main" data-aos="fade-up">
                <iframe src="https://www.youtube.com/embed/{{ $list->video_code ?? '' }}"
                    title="{{ $list->title ?? '' }}" frameborder="0" allowfullscreen
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>

                <p>
                    <span class="video-title">
                        {{ $list->title ?? '' }}
                    </span>
                    <br>
                    {{ $list->description ?? '' }}
                </p>
                <p class="date">{{ displayDateOnly($list->date) }}</p>
            </div>
        @endforeach
    </main>

    {{ $lists->links('frontend.layouts.pagination') }}

    <x-frontend.footer />
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
