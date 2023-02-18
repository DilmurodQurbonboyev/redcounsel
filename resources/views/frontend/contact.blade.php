<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontend.layouts.seo')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <title>{{ tr('Contact') }}</title>
</head>

<body>
    <div class="nav">
        <x-frontend.header />

        <div class="bg-contact"></div>
        <div class="ourTeam">
            <h2>{{ tr('Contact') }}</h2>
            <p>
                <a href="/">{{ tr('Home') }} </a>
                / {{ tr('Contact') }}
            </p>
        </div>
    </div>

    <div data-aos="zoom-in-up" class="contents">
        <div class="content-in">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6">
                        <div class="address">
                            <div class="address-title">
                                <span>{{ tr('Contact') }}</span>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Address') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{!! $contact->address ?? '' !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Phone') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <a href="#">{{ $contact->phone ?? '' }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Email') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <a href="#">{{ $contact->email ?? '' }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Reception') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->reception ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Working Time') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->working_time ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Weekend') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->weekend ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Transport') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->transport ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Landmark') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->landmark ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Technical support of the site') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->support ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Press Service') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->press_service ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-data">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="contact-left">
                                            <span>{{ tr('Hr Department') }}:</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="contact-right">
                                            <span>{{ $contact->hr_department ?? '' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div data-aos="zoom-in-up" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-frontend.footer />
    <script>
        var latitude = <?= $contact->latitude ?>;
        var longitude = <?= $contact->longitude ?>;

        AOS.init();
        var map = L.map('map').setView([latitude, longitude], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
            .openPopup()
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
