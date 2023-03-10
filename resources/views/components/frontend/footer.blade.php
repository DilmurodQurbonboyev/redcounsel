<footer>
    <div class="footer-one">
        <div class="footer-logo">
            <a href="/">{{ tr('Red Counsel') }}</a>
        </div>
        <div class="footer-links">
            @foreach ($top_menu_tree as $menu)
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
                    <a class="call">{{ tr('Phone') }}:</a><br>
                    <a href="tel:{{ $contact->phone ?? '' }}">{{ $contact->phone ?? '' }}</a><br>
                    <a href="tel:{{ $contact->phone2 ?? '' }}">{{ $contact->phone2 ?? '' }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
