<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ $category->title ?? '' }}</title>
</head>

<body>
    <div class="nav">
        <x-frontend.header />
    </div>
    <div class="bg-news"></div>
    <div class="ourTeam">
        <h2>{{ $category->title ?? '' }}</h2>
        <p><a href="/">{{ tr('Home') }} </a> /{{ $category->title ?? '' }}</p>
    </div>

    <h2 class="newsTitle">
        {{ $category->title ?? '' }}
        <img width="50px" src="{{ asset('img/news.jpg') }}" alt="">
    </h2>
    <main>
        @foreach ($lists as $list)
            <a href="{{ route('news', $list->slug) }}" class="pb-5">
                <div class="newsMain" data-aos="fade-up">
                    <img class="mainImg" src="{{ $list->anons_image ?? '' }}" alt="{{ $list->title ?? '' }}">
                    <p class="newsInfo">{{ $list->title ?? '' }}</p>
                    <div class="newsBottom">
                        <p>
                            <span class="calaendar">
                                <img width="30px" src="{{ asset('img/date.png') }}" alt="date">
                            </span>
                            <span class="dateMain">{{ displayDateOnly($list->date) }} | <span
                                    class="time">{{ \Illuminate\Support\Carbon::parse($list->created_at)->format('H:i') }}</span></span>
                        </p>
                        <p><img width="30px" src="{{ asset('img/eye.png') }}" alt="eye">
                            <span class="views">{{ $list->count_view }}</span>
                        </p>
                    </div>
                </div>
            </a>
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
