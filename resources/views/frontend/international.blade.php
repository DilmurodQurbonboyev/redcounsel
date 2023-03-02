<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/international.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ tr('International') }}</title>
</head>

<body>
    <div class="nav">
        <x-frontend.header />
    </div>

    <section class="international">
        @foreach ($lists as $list)
            <div class="{{ $list->title ?? '' }}" id="inter" data-text="{{ $list->title ?? '' }}">
                <div class="inter-img" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <img src="{{ asset($list->anons_image) ?? '' }}" alt="">
                </div>
                <div class="lex-text" id="text" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <h2>{{ $list->title ?? '' }}</h2>
                    <p class="lex_p">{{ $list->description ?? '' }}</p>
                </div>
            </div>
        @endforeach
    </section>

    {{ $lists->links('frontend.layouts.pagination') }}
    <x-frontend.footer />


    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap5.bundle.min.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
