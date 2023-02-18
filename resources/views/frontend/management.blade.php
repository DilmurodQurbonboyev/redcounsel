<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ tr('Managements') }}</title>
</head>

<body>
    <header>
        <x-frontend.header />
        <div class="team-bg">
        </div>
        <div class="ourTeam">
            <h2>{{ tr('Managements') }}</h2>
            <p><a href="/">{{ tr('Home') }}</a>/{{ tr('Managements') }}</p>
        </div>

    </header>

    @foreach ($leaders as $leader)
        <div class="team-main" data-aos="fade-up" data-aos-duration="2000">
            <img width="200px" src="{{ $leader->anons_image ?? '' }}" alt="">
            <div class="info-team">
                <h3>{{ $leader->leader ?? '' }}</h3>
                <p>{{ $leader->title ?? '' }}</p>
                <div class="malumotlar">
                    <div>
                        <p>{{ tr('Reception') }}:</p>
                        <p class="teamContact">{{ tr('Phone') }}:</p>
                        <p class="teamContact">{{ tr('Email') }}:</p>
                    </div>

                    <div>
                        <p>{{ $leader->reception ?? '' }}</p>
                        <p>
                            <a href="tell:{{ $leader->phone ?? '' }}">{{ $leader->phone ?? '' }}</a>
                        </p>
                        <p><a href="{{ $leader->email ?? '' }}">{{ $leader->email ?? '' }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{ $leaders->links('frontend.layouts.pagination') }}

    <section class="team">
        <div class="team-one">
            <div class="experienceHeader" data-aos="fade-up-right" id="team-one">
                <h2 class="experience">{{ $experience->title ?? '' }}</h2>
                <p class="exp_sentence">
                    {{ $experience->description ?? '' }}
                </p>
            </div>
            <div data-aos="fade-up-left" class="unique" id="team-one">
                <h2 class="unique_h2">{!! $unique->title ?? '' !!}</h2>
                <p class="unique_p">{{ $unique->description ?? '' }}</p>
            </div>
        </div>
        <div class="practice pb-4">
            <h2 style="font-size: 3rem;" class="practice_h2" data-aos="flip-left">{{ $teamPractise->title ?? '' }}</h2>
            <div class="practice-rest pb-4">
                @foreach ($teamPractise->lists as $list)
                    <div class="practice-one" id="practice">
                        <div data-aos="zoom-in-up" class="practice-one-text" id="text">
                            <p class="practice1_p">{{ $list->title ?? '' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <x-frontend.footer />

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/team.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
