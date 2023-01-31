@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
<?php
$name = 'name_' . app()->getLocale();
?>
@section('content')
    <div class="pages">
        <div class="pages-in">
            <div class="container">
                <div class="pages-out">
                    <div class="pages-title">
                        <span>{{ $category->title ?? '' }}</span>
                    </div>
                    <div class="pages-breadcrump">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{ tr('Home') }}</a></li>
                                <li class="breadcrumb-item" aria-current="page">{{ $category->title ?? '' }}</li>
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
                        <div class="my-accardion">
                            <div class="accordion" id="accordionExample">
                                @foreach($regions as $region)
                                    @if(!$region->managements->isEmpty())
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-region-{{$region->id}}"
                                                        aria-expanded="true"
                                                        aria-controls="collapse-region-{{$region->id}}">
                                                    <span>{{ $region->$name }}</span>
                                                </button>
                                            </h2>
                                            <div id="collapse-region-{{$region->id}}"
                                                 class="accordion-collapse collapse"
                                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="region">
                                                        <div class="leader">
                                                            <div class="row">
                                                                @if(!empty($region->managements))
                                                                    @foreach($region->managements as $leader)
                                                                        <div class="col-xxl-2 col-md-3">
                                                                            <div class="lead-img">
                                                                                @if($leader->anons_image)
                                                                                    <img
                                                                                        src="{{ $leader->anons_image ?? '' }}"
                                                                                        alt="region">
                                                                                @else
                                                                                    <img
                                                                                        src="{{ asset('img/noImage.jpg') }}"
                                                                                        alt="region">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xxl-9 col-md-9">
                                                                            <div class="lead-right">
                                                                                <div class="lead-name">
                                                                                    <span>{{ $leader->leader ?? '' }}</span>
                                                                                </div>
                                                                                <div class="lead-position">
                                                                                    <span>{{ $leader->title ?? '' }}</span>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-xl-3">
                                                                                        <div class="lead-a">
                                                                                            <span>{{ tr('Reception') }}:</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-9">
                                                                                        <div class="lead-b">
                                                                                            <span>{{ $leader->reception ?? '' }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-xl-3">
                                                                                        <div class="lead-a">
                                                                                            <span>{{tr('Phone')}}:</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-9">
                                                                                        <div class="lead-b">
                                                                                            <a href="#">{{ $leader->phone ?? '' }}</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-xl-3">
                                                                                        <div class="lead-a">
                                                                                            <span>{{tr('Email')}}:</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-9">
                                                                                        <div class="lead-b">
                                                                                            <a href="#">{{ $leader->email ?? '' }}</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="accordion"
                                                                                     id="accordionExample1">
                                                                                    <div class="lead-nav">
                                                                                        <h2 class="accordion-header"
                                                                                            id="headingOne1">
                                                                                            <button
                                                                                                class="accordion-button collapsed"
                                                                                                type="button"
                                                                                                data-bs-toggle="collapse"
                                                                                                data-bs-target="#collapse-function-{{$leader->id}}"
                                                                                                aria-expanded="false"
                                                                                                aria-controls="collapse-function-{{$leader->id}}">
                                                                                                <span>{{ tr('Functions') }}</span>
                                                                                            </button>
                                                                                        </h2>
                                                                                        <h2 class="accordion-header"
                                                                                            id="headingThree1">
                                                                                            <button
                                                                                                class="accordion-button collapsed"
                                                                                                type="button"
                                                                                                data-bs-toggle="collapse"
                                                                                                data-bs-target="#collapse-biography-{{$leader->id}}"
                                                                                                aria-expanded="false"
                                                                                                aria-controls="collapse-biography-{{$leader->id}}">
                                                                                                <span>{{ tr('Biography') }}</span>
                                                                                            </button>
                                                                                        </h2>
                                                                                    </div>
                                                                                    <div class="lead-in">
                                                                                        <div
                                                                                            id="collapse-function-{{$leader->id}}"
                                                                                            class="accordion-collapse collapse"
                                                                                            aria-labelledby="headingOne1"
                                                                                            data-bs-parent="#accordionExample1">
                                                                                            <div class="lead-out">
                                                                                                {{ $leader->description ?? '' }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="lead-in">
                                                                                        <div
                                                                                            id="collapse-biography-{{$leader->id}}"
                                                                                            class="accordion-collapse collapse"
                                                                                            aria-labelledby="headingThree1"
                                                                                            data-bs-parent="#accordionExample1">
                                                                                            <div class="lead-out">
                                                                                                {{ $leader->biography ?? '' }}
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-pagination">
                    {{ $regions->links('frontend.layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
