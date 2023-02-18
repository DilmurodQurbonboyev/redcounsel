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
        @foreach ($top_menu_tree as $menu)
            @if (!isset($menu['submenus']))
                <a href="{{ hrefType($menu['link_type'], $menu['link']) }}" target="{{ targetType($menu['link_type']) }}">
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
        <button style="font-size: 1.6rem!important; align-items: center; display: flex; justify-content: space-between;"
            class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ LaravelLocalization::getCurrentLocaleNative() }}
        </button>
        <ul style="font-size: 1.6rem!important;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a class="dropdown-item" hreflang="{{ $localeCode }}"
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
        @foreach ($top_menu_tree as $menu)
            @if (!isset($menu['submenus']))
                <a href="{{ hrefType($menu['link_type'], $menu['link']) }}"
                    target="{{ targetType($menu['link_type']) }}">
                    {{ $menu['title'] ?? '' }}
                </a>
            @endif
            @if (isset($menu['submenus']))
                <div class="dropdown dropella topmenuDrop">
                    <button class="dropbtn knopka"> {{ $menu['title'] ?? '' }}</button>
                    <div style="font-size: 1.5rem!important;" class="dropdown-content dropLink">
                        @foreach ($menu['submenus'] as $item)
                            <a href="{{ hrefType($item['link_type'], $item['link']) }}"
                                target="{{ targetType($item['link_type']) }}">
                                {{ $item['title'] ?? '' }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</nav>
