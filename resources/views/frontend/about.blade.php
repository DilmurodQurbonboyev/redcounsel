<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ tr('About') }}</title>
</head>

<body>
    <header>
        <div class="nav">
            <x-frontend.header />
        </div>
        <div class="about-bg"></div>
        <div class="ourTeam">
            <h2>{{ tr('About') }}</h2>
            <p><a href="/">{{ tr('Home') }} </a> / {{ tr('About') }}</p>
        </div>
    </header>

    <div class="about-overview">
        <h1 class="about-overview-text">{{ $list->title ?? '' }}</h1>
        <p class="overview_text">{{ $list->description ?? '' }}</p>
    </div>

    <section class="overview-section">
        <div class="overview">
            @foreach ($services as $service)
                <div class="over-type {{ $loop->odd ? 'one' : '' }}" id="overview">
                    <div class="over-img" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="{{ $service->anons_image ?? '' }}" alt="{{ $service->title ?? '' }}">
                    </div>
                    <div class="over-text" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h1 class="over1_h1">{{ $service->title ?? '' }}</h1>
                        <p class="over1_p">{{ $service->description ?? '' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-frontend.footer />

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
