<div class="services " id="home-services">
    @foreach ($services as $service)
        <div class="service- {{ $loop->odd ? 'one' : 'two' }}" id="service">
            <div class="service-text" data-num="{{ $service->id }}" data-aos="fade-up-right">
                <h2 class="service{{ $service->id }}_h2">
                    {{ $service->title ?? '' }}
                </h2>
                <p class="service{{ $service->id }}_p">
                    {{ $service->description ?? '' }}
                </p>
                <a href="{{ route('expertise') }}" class="service_a">{{ tr('More') }}</a>
            </div>
            <div class="service-img" data-aos="fade-up-left">
                <img src="{{ $service->anons_image ?? '' }}" alt="">
            </div>
        </div>
    @endforeach
</div>
