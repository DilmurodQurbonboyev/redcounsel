<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <title>{{ asset('RedCounsel') }}</title>
</head>

<body>
<header>
    <div class="nav">
        <nav>
            <div class="logo">
                <a href="home.html">Red Counsel</a>
                <p><i class="logo_sentence">One vision, one firm</i></p>
            </div>
            <div class="links" id="links">
                <a href="./home.html" class="active home">Home</a>
                <a href="./about.html" class="about">About Us</a>

                <div class="dropdown dropella">
                    <button class="dropbtn knopka">Dropdown</button>
                    <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">

                        <a class="" href="./videoGalery.html">Video galery</a>
                        <a class="news" href="./news.html">News & Deals</a>
                    </div>
                </div>
                <a href="./team.html" class="team">Team</a>
                <a href="#" class=" expertise">Expertise</a>
                <a href="./international.html" class="international">International</a>
                <a href="./contact.html" >Contact Us</a>
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
                    <li><a class="dropdown-item" href="#"><img width="20px" src="https://uxwing.com/wp-content/themes/uxwing/download/flags-landmarks/russia-flag-icon.png" alt=""> Russian</a></li>
                    <li><a class="dropdown-item" href="#"><img width="20px" src="https://w7.pngwing.com/pngs/721/597/png-transparent-uzbekistan-flag-icon.png" alt=""> Uzbek</a></li>

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
                <a href="./contact.html" >Contact Us</a>
                <div class="dropdown dropella topmenuDrop">
                    <button class="dropbtn knopka">Dropdown</button>
                    <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">

                        <a  href="./videoGalery.html">Video galery</a>
                        <a class="news" href="./news.html">News & Deals</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

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
            <img src="../images/image1.webp" class="d-block w-100" alt="...">
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


<!-- exp -->
<div class="exp">
    <h2 class="year">{{ now()->format('Y') - 2003 }} {{ tr('years') }}</h2>
    <h3 class="experience">experience</h3>
    <p class="exp_sentence">Red Counsel's team has substantial experience in providing full-fledged legal
        support to its clients with
        high standard of legal advice and tailor-made business solutions. More than 15 years of successful
        experience
        in practicing law, a thorough knowledge of the local business environment, and a clear understanding of
        clients' needs, puts Red Counsel in the right place to add real value to projects of our clients at all
        stages, from initiation to execution.</p>
    <button style="cursor: pointer;" class="more" onclick="aboutus()">more about us</button>
</div>
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


<footer>
    <div class="footer-one" data-aos="zoom-in-up">
        <div class="footer-logo">
            <a href="./home.html">Red Counsel</a>
        </div>
        <div class="footer-links">
            <a href="./home.html" class="homeFooter">Home</a>
            <a href="./about.html" class="aboutFooter">About Us</a>
            <div class="footer-drop dropdown dropella">
                <button class="dropbtn knopka">Dropdown</button>
                <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">

                    <a href="./videoGalery.html">Video galery</a>
                    <a class="news" href="./news.html">News & Deals</a>
                </div>
            </div>
            <a href="./team.html" class="teamFooter">Team</a>
            <a href="./expertise.html" class="expertiseFooter">Expertise</a>
            <a href="./international.html" class="internationalFooter">International</a>
            <a href="./contact.html">Contact Us</a>
        </div>
        <div class="contact">
            <div id="call">
                <i class="fa fa-phone"></i>
                <div class="phone">
                    <a class="call">Tel No:</a><br>
                    <a href="tel:+998980008595">(+98) 000-85-95</a><br>
                    <a href="tel:+998958025080">(+95) 802-50-80</a>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/font-awesome') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
