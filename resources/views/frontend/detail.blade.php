<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsMain.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ $list->title ?? '' }}</title>
</head>

<body>
    <div class="nav">
        <x-frontend.header />
    </div>

    <main>
        <h2 class="newsTitle">{{ $list->category ?? '' }}
            <img width="50px" src="{{ asset('img/news.jpg') }}" alt="">
        </h2>

        <section class="main-section section-main">
            <div class="container">

                <div class="my-breadcrump">
                    <nav class="topNews" aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">{{ tr('Home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category', 'yangiliklar') }}">
                                    {{ $list->category ?? '' }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="news-detail">
                            <div class="detail-date">
                                <div class="date-time">
                                    <img src="{{ asset('img/calendar.svg') }}" alt="calendar">
                                    <span>{{ displayDateOnly($list->date) }}</span>
                                    <span>|</span>
                                    <span>{{ \Illuminate\Support\Carbon::parse($list->created_at)->format('H:i') }}</span>
                                </div>
                                <div class="date-count">
                                    <img src="{{ asset('img/view.svg') }}" alt="view">
                                    <span>{{ $list->count_view ?? 0 }}</span>
                                </div>
                            </div>
                            <div class="title">
                                <span>{{ $list->title ?? '' }}</span>
                            </div>
                            <div class="description">
                                <span>
                                    <p>{{ $list->description ?? '' }}</p>
                                </span>
                            </div>
                            <div class="owl-detail">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="owl-detail-img">
                                            <img width="100%" src="{{ asset($list->anons_image) ?? '' }}" alt="alter ego">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                {!! $list->content ?? '' !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-frontend.footer />

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
