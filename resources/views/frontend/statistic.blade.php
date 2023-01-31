@extends('frontend.layouts.app')
@section('title')
@endsection
@section('content')

    <div class="pages">
        <div class="pages-in">
            <div class="container">
                <div class="pages-out">
                    <div class="pages-title">
                        <span>{{ tr('Application results') }}</span>
                    </div>
                    <div class="pages-breadcrump">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{ tr('Home') }}</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ tr('Application results') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contents">
        <div class="content-in">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="stat">
                            <figure class="highcharts-figure">
                                <div id="stat"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-in">
            <div class="container">
                <div class="row">
                    <div class="my-accardion">
                        <div class="accordion" id="accordionExample">
                            @foreach($lists as $list)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{$list->id}}" aria-expanded="true"
                                                aria-controls="collapse-{{$list->id}}">
                                            <span>{{ $list->title ?? '' }}</span>
                                        </button>
                                    </h2>
                                    <div id="collapse-{{$list->id}}" class="accordion-collapse collapse"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body table-responsive">
                                            {{ $list->description ?? '' }}

                                            @if($list->pdf)
                                                <div class="pdf">
                                                    @if($list->pdf_type == 2)
                                                        <div class="pdf-out">
                                                            <div class="pdf-left">
                                                                <a href="{{ $list->pdf ?? '' }}">
                                                                    <img src="{{ asset('img/pdf.png') }}">
                                                                </a>
                                                            </div>
                                                            <div class="pdf-right">
                                                                <div class="pdf-name">
                                                                    <span>{{ $list->pdf_title ?? '' }}</span>
                                                                </div>
                                                                <div class="pdf-download">
                                                                    <a href="{{ $list->pdf ?? '' }}">{{ tr('Download') }}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if($list->pdf_type == 1)
                                                        <div class="pdf-in">
                                                            <div class="row justify-content-center">
                                                                <div class="col-xxl-12">
                                                                    <iframe
                                                                        src="{{ $list->pdf ?? '' }}"
                                                                        style="width: 100%; height:600px;"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif

                                            {!! $list->content ?? '' !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="my-pagination">
                    {{ $lists->links('frontend.layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('front-js')
    <script type="text/javascript">

        var totalAppeals = {{ Js::from($totalAppeals) }};
        var successAppeals = {{ Js::from($successAppeals) }};
        var processAppeals = {{ Js::from($processAppeals) }};
        var rejectAppeals = {{ Js::from($rejectAppeals) }};

        var appeals = {{ Js::from(tr('appeals')) }};

        var titleMessage = {{ Js::from(tr('Application results')) }};
        // var textMessage = 'ss';
        var infoMessage = {{ Js::from(tr('Received appeals in numbers')) }};
        var successMessage = {{ Js::from(tr('total number of satisfied references')) }};
        var processMessage = {{ Js::from(tr('number of appeals under consideration')) }};
        var rejectMessage = {{ Js::from(tr('number of rejected appeals')) }};
        var totalMessage = {{ Js::from(tr('total number of requests received')) }};

        Highcharts.chart('stat', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'left',
                text: titleMessage
            },
            subtitle: {
                align: 'left',
                // text: textMessage
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: infoMessage
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> ta<br/>'
            },

            series: [
                {
                    name: appeals,
                    colorByPoint: true,
                    data: [
                        {
                            name: totalMessage,
                            y: totalAppeals,
                            drilldown: "id1"
                        },
                        {
                            name: successMessage,
                            y: successAppeals,
                            drilldown: "id2"
                        },
                        {
                            name: processMessage,
                            y: processAppeals,
                            drilldown: "id3"
                        },
                        {
                            name: rejectMessage,
                            y: rejectAppeals,
                            drilldown: "id4"
                        }
                    ]
                }
            ],
            drilldown: {
                breadcrumbs: {
                    position: {
                        align: 'right'
                    }
                },
                series: []
            }
        });

    </script>
@endpush
