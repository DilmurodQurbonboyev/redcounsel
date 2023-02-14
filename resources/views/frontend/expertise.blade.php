<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/expertise.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('css/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ tr('Expertise') }}</title>
</head>

<body>
<header>
    <x-frontend.header/>
    <div class="exp-bg"></div>
</header>

<main>
    <div class="main-nav">
        <ul>
            @foreach($expertises as $c)
                <li id="main-link" class="main-link {{ $loop->first ? 'active-link' : '' }}">
                    <h2 class="service{{ $c->id }}_h2">{{ $c->title ?? '' }}</h2>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="main-block">
        @foreach($expertises as $list)
            <div class="baf {{ $loop->first ? 'active' : '' }}" id="main">
                <img src="{{ $list->anons_image ?? '' }}" alt="">
                <div class="textbox">
                    <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"
                       class="service{{ $list->id }}_p">
                        {{ $list->description ?? '' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</main>

<x-frontend.footer/>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/exp.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
