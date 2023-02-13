<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <x-frontend.header/>

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
                                        <span>Манзил:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>100047, Ўзбекистон Республикаси, Тошкент шаҳри, Яшнобод тумани, Истиқбол кўчаси, 21-уй</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Телефон:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <a href="#">(+99871) 232-05-17</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Fax:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Email:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <a href="#">info@uzngi.uz</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Қабул:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>Душанба-жума 09:00 - 18:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Иш вақти:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>Душанба-жума 09:00 - 18:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Тушлик:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>13:00 дан - 14:00 гача</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Дам олиш куни:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>шанба ва якшанба</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Транспорт:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>Метро: Амир Темур бекати Автобуслар: № 14, 53, 58, 78, 93, 98</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Мўлжал:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>Тошкент шаҳридаги Халқаро Вестминстер университети</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Канцелярия:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>(+99871) 232-05-17 (429)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Ходимлар бўлими:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>(+99871) 232-05-17 (430)</span>
                                    </div>
                                </div>
                            </div>
                        </div> <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Матбуот хизмати:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>Электрон ҳукумат тизимини, ахборот технологияларини ривожлантириш ва жамоатчилик билан алоқалар бўлими  Тел.: (+99871) 232-05-18 (429)</span>
                                    </div>
                                </div>
                            </div>
                        </div> <div class="contact-data">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact-left">
                                        <span>Техник қўллаб-қувватловчи бўлим:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>Ижро интизомини назорат қилиш ва мурожаатлар билан ишлаш бўлими  (+99871) 200 11 14</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 " >

                    <div data-aos="zoom-in-up" id="map" ></div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-frontend.footer/>
<script>
    AOS.init();

    var map = L.map('map').setView([41.2926973,69.2477483], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([41.2926973,69.2477483]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup()

</script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
