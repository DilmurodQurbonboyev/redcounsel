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
    <script src="{{ asset('js/font-awesome.js') }}"></script>
    <title>{{ tr('Contact') }}</title>
</head>
<body>
<div class="nav">
    <nav>
        <div class="logo">
            <a href="home.html">Red Counsel</a>
            <p><i class="logo_sentence">One vision, one firm</i></p>
        </div>
        <div class="links" id="links">
            <a href="./home.html" class=" home">Home</a>
            <a href="./about.html" class="about">About Us</a>

            <div class="dropdown dropella">
                <button class="dropbtn knopka">Dropdown</button>
                <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">

                    <a class="active" href="./videoGalery.html">Video galery</a>
                    <a href="news.html" class="news">News</a>
                </div>
            </div>
            <a href="./team.html" class="team">Team</a>
            <a href="./expertise.html" class="expertise">Expertise</a>
            <a href="./international.html" class="international">International</a>
            <a href="#" class="active contact">Contact Us</a>
        </div>
        <div class="dropdown languagePicker">
            <button
                style="font-size: 1.6rem!important; align-items: center; display: flex; justify-content: space-between;"
                class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img style="margin-right: 5px;" width="20px"
                     src="https://www.citypng.com/public/uploads/preview/free-united-kingdom-england-uk-flag-icon-png-116400083878xgu5wo6d3.png"
                     alt=""> English
            </button>
            <ul style="font-size: 1.6rem!important;" class="dropdown-menu"
                aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><img width="20px"
                                                           src="https://uxwing.com/wp-content/themes/uxwing/download/flags-landmarks/russia-flag-icon.png"
                                                           alt=""> Russian</a></li>
                <li><a class="dropdown-item" href="#"><img width="20px"
                                                           src="https://w7.pngwing.com/pngs/721/597/png-transparent-uzbekistan-flag-icon.png"
                                                           alt=""> Uzbek</a></li>

            </ul>
        </div>
        <div class="res-box">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="res-menu" id="links">
            <a href="./home.html" class="home">Home</a>
            <a href="./about.html" class="about">About Us</a>

            <a href="./team.html" class="team">Team</a>
            <a href="./expertise.html" class="expertise">Expertise</a>
            <a href="./international.html" class="international">International</a>
            <a href="./contact.html">Contact Us</a>
            <div class="dropdown dropella topmenuDrop">
                <button class="dropbtn knopka">Dropdown</button>
                <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">

                    <a href="./videoGalery.html">Video galery</a>
                    <a class="news" href="./news.html">News & Deals</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-contact"></div>
    <div class="ourTeam">
        <h2>About Us</h2>
        <p><a href="./home.html">Asosiy </a> /About us</p>
    </div>
</div>


<!-- contact info -->


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
                                        <span>{{ $contact->address ?? '' }}</span>
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
                                        <span>{{ tr('Fax') }}:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <a href="#">{{ $contact->fax ?? '' }}</a>
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
                                        <span>{{ tr('Lunch') }}:</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="contact-right">
                                        <span>{{ $contact->lunch ?? '' }}</span>
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
                    <div class="col-xxl-6 ">
                        <div data-aos="zoom-in-up" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-frontend.footer/>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
