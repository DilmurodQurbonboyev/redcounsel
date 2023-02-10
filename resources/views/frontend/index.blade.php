<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/font-awesome.js') }}"></script>
    <title>{{ tr('RedCounsel') }}</title>
</head>

<body>
<x-frontend.header/>

<!-- carusel -->
<div id="carouselExampleCaptions carosuel-main" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/service1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/image1.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/image1.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<x-frontend.about/>
<div class="services " id="home-services">
    <div class="service-one " id="service">
        <div class="service-text" data-num="01" data-aos="fade-up-right">
            <h2 class="service1_h2">Banking and Finance</h2>
            <p class="service1_p">We have a leading finance practice in Uzbekistan with a breadth of experience
                across all economic
                sectors, focusing on banking and credit products, bank acquisitions, secured lending transactions,
                export-import finance, debt and equity finance, financial markets regulation, real estate finance,
                structured finance, financial leasing, and other related projects.</p>
            <a href="./expertise.html" class="service_a">More</a>
        </div>
        <div class="service-img" data-aos="fade-up-left">
            <img src="./images/service1.jpg" alt="">
        </div>
    </div>
    <div class="service-two " id="service">
        <div class="service-img" data-aos="fade-up-left">
            <img src="./images/service2.jpg" alt="">
        </div>
        <div class="service-text " data-aos="fade-up-right" data-num="02">
            <h2 class="service2_h2">Corporate and M&A</h2>
            <p class="service2_p">Red Counsel's corporate and M&A practice represent and works with clients on the
                full range of
                corporate transactions, including M&A, private equity, securities and corporate governance. Our
                legal advice is always accompanied with competent tax consultancy throughout the whole corporate
                projects, including corporate restructuring, M&A, and due diligence projects.</p>
            <a href="./expertise.html" class="service_a">More</a>
        </div>
    </div>
    <div class="service-three " id="service">
        <div class="service-text" data-num="03" data-aos="fade-up-right">
            <h2 class="service3_h2">Real Estate, Constructing & Planning</h2>
            <p class="service3_p">We carry out Due Diligence of targets, help with title clearance, identify liens
                and encumbrances,
                help with proper formalisation of a deal, as well as restoration of inventory records. We are always
                pleased to support you in sale of mortgaged assets, eviction of estate and any alteration to
                property's
                specified purpose.</p>
            <a href="./expertise.html" class="service_a">More</a>
        </div>
        <div class="service-img" data-aos="fade-up-left">
            <img src="./images/service3.jpg" alt="">
        </div>
    </div>
    <div class="service-four " id="service">
        <div class="service-img" data-aos="fade-up-left">
            <img src="./images/service4.jpg" alt="">
        </div>
        <div class="service-text" data-aos="fade-up-right" data-num="04">
            <h2 class="service4_h2">Red Counsel Research Group (RG)</h2>
            <p class="service4_p">Red Counsel RG covers practically all areas of laws of its jurisdictions and our
                services include
                not only legal consultancy services but also legal research and analysis, practical planning and
                structuring support, practical implementation and performance of the project and certain legal
                actions,
                such as due diligence and legal research, legal analyzing laws/sub-legal acts, drafting red flag
                reports,
                drafting complex business contracts, receiving licenses and other sorts of authorizations,
                representing
                our clients before state authorities and courts</p>
            <a href="./expertise.html" class="service_a">More</a>
        </div>
    </div>
    <div class="service-five " id="service">
        <div class="service-text" data-aos="fade-up-right" data-num="05">
            <h2 class="service5_h2">Compliance & Risk</h2>
            <p class="service5_p">We have expert lawyers worked at the state regulator on commercial banks, and
                numerous financial
                institutions. Our team regularly advises clients on matters of business compliance, and offers
                strong
                anti-bribery and anti-money laundering and counter-terrorist financing expertise. Our lawyers can
                advise on the rules and regulations in Uzbekistan jurisdiction</p>
            <a href="./expertise.html" class="service_a">More</a>
        </div>
        <div class="service-img" data-aos="fade-up-left">
            <img src="./images/service5.jpg" alt="">
        </div>
    </div>
</div>

<x-frontend.footer />
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
