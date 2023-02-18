<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
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
        <div class="nav">
            <x-frontend.header />
        </div>
        <div class="exp-bg"></div>
    </header>

    <main>
        <div class="main-nav">
            <ul>
                @foreach ($expertises as $c)
                    <li id="main-link" class="main-link {{ $loop->first ? 'active-link' : '' }}">
                        <h2 class="service{{ $loop->iteration }}_h2">{{ $c->title ?? '' }}</h2>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="main-block">
            @foreach ($expertises as $list)
                <div class="{{ $loop->first ? 'active' : '' }}" id="main">
                    <img src="{{ $list->body_image ?? '' }}" alt="">
                    <div class="textbox">
                        <p class="service{{ $loop->iteration }}_p">
                            {{ $list->description ?? '' }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <x-frontend.footer />

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/exp.js') }}"></script>
    <script>
        let expertiseList = <?php echo count($expertises); ?>;
        const choose = document.querySelectorAll('.main-link')
        const chosen = document.querySelectorAll('#main')

        for (let i = 0; i < expertiseList; i++) {
            choose[i].addEventListener('click', () => {
                invoke()
                chosen[i].classList.add('active')
                choose[i].classList.add('active-link')
            })
        }

        function invoke() {
            for (let i = 0; i < expertiseList; i++) {
                chosen[i].classList.remove('active')
                choose[i].classList.remove('active-link')
            }
        }
    </script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
