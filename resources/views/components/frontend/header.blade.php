<header>
    <div class="nav">
        <nav>
            <div class="logo">
                <a href="/">{{ tr('Red Counsel') }}</a>
                <p>
                    <i class="logo_sentence">
                        {{ tr('One vision, one firm') }}
                    </i>
                </p>
            </div>
            <div class="links" id="links">
                @foreach($top_menu_tree as $menu)
                    @if (!isset($menu['submenus']))
                        <a href="{{ hrefType($menu['link_type'], $menu['link']) }}"
                           target="{{ targetType($menu['link_type']) }}">
                            {{ $menu['title'] ?? '' }}
                        </a>
                    @endif
                    @if (isset($menu['submenus']))
                        <div class="dropdown dropella">
                            <button class="dropbtn knopka">
                                {{ $menu['title'] ?? '' }}
                            </button>
                            <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">
                                @foreach ($menu['submenus'] as $item)
                                    @if (!isset($item['submenus']))
                                        <a href="{{ hrefType($item['link_type'], $item['link']) }}"
                                           target="{{ targetType($item['link_type']) }}">
                                            {{ $item['title'] ?? '' }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="dropdown languagePicker">
                <button
                    style="font-size: 1.6rem!important; align-items: center; display: flex; justify-content: space-between;"
                    class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                </button>
                <ul style="font-size: 1.6rem!important;" class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="res-box">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="res-menu" id="links">
                <a href="#" class="home">Home</a>
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
        <i class="fa fa-angle-left"></i>
        <i class="fa fa-angle-right"></i>
    </div>
    <div class="exp">
        <h2 class="year">20 years</h2>
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
</header>
