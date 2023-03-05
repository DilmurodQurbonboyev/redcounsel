<div class="container">
    <h2 class="text-center font-weight-bold partnors">{{ tr('Our Partners') }}</h2>
    <section class="customer-logos slider">
        @foreach ($partners as $partner)
            <a href="{{ hrefType($partner->link_type, $partner->link) }}" target="{{ targetType($partner->link_type) }}">
                <div class="slide">
                    <img src="{{ $partner->image ?? '' }}" alt="logo">
                </div>
            </a>
        @endforeach
    </section>
</div>
