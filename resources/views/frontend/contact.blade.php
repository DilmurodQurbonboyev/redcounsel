@extends('frontend.layouts.app')
@section('title')
    {{ tr('Contact') }}
@endsection
@section('content')
    <div class="main-content">
        <div class="contact">
            <div class="container">
                <div class="main-title">
                    <span>{{ tr('Contact') }}</span>
                </div>
                <div class="expert-nav">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="expert-number">{{ tr('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="#">{{ tr('Contact') }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-xl-6 mt-3">
                        <div class="contact-col">
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
{{--                                <div class="contact-data">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-4">--}}
{{--                                            <div class="contact-left">--}}
{{--                                                <span> {{ tr('Working Time') }}:</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-8">--}}
{{--                                            <div class="contact-right">--}}
{{--                                                <span>{{ $contact->working_time ?? '' }}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="contact-data">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="contact-left">
                                                <span> {{ tr('Lunch') }}:</span>
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
                                                <span>{{ tr('Landmark') }}:</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="contact-right">
                                                <span>{{ $contact->landmark ?? '' }}</span>
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
                                                <span>{{ tr('Press Service') }}:</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="contact-right">
                                                <span>{{ $contact->press_service ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-data">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="contact-left">
                                                <span>{{ tr('Technical support of the site') }}:</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="contact-right">
                                                <span>{{ $contact->support ?? '' }}</span>
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
                                                <span>{{ $contact->phone ?? '' }}</span>
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
                                                <span>{{ $contact->phone2 ?? '' }}</span>
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
                                                <span>{{ $contact->fax ?? '' }}</span>
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
                                                <span>{{ $contact->email ?? '' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-3">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('front-js')
    <script>
        var latitude = <?= $contact->latitude ?>;
        var longitude = <?= $contact->longitude ?>;

        var map = L.map('map', { center: [latitude, longitude], zoom: 13, attributionControl: false });
        let open_street = L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png");
        let google_street = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {subdomains:['mt0','mt1','mt2','mt3']});
        let google_satellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}' , {subdomains:['mt0','mt1','mt2','mt3']});
        let google_hybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {subdomains:['mt0','mt1','mt2','mt3']});
        L.marker([latitude, longitude]).addTo(map);

        let baseMaps = {
            "Open Street Map": open_street,
            "Google Streets": google_street,
            "Google Satellite": google_satellite,
            "Google Hybrid": google_hybrid,
        };

        google_street.addTo(map);

        L.control.layers(baseMaps, null, {}).addTo(map);
    </script>
@endpush
