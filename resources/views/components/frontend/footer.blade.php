<footer>
    <div class="footer-one" data-aos="zoom-in-up">
        <div class="footer-logo">
            <a href="/">{{ tr('Red Counsel') }}</a>
        </div>
        <div class="footer-links">
            @foreach($top_menu_tree as $menu)
                @if (!isset($menu['submenus']))
                    <a href="{{ hrefType($menu['link_type'], $menu['link']) }}"
                       target="{{ targetType($menu['link_type']) }}">{{ $menu['title'] ?? '' }}</a>
                @endif
                @if (isset($menu['submenus']))
                    <div class="footer-drop dropdown dropella">
                        <button class="dropbtn knopka">
                            {{ $menu['title'] ?? '' }}
                        </button>
                        <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">
                            @foreach ($menu['submenus'] as $item)
                                @if (!isset($item['submenus']))
                                    <a href="{{ hrefType($item['link_type'], $item['link']) }}"
                                       target="{{ targetType($item['link_type']) }}">{{ $item['title'] ?? '' }}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
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
