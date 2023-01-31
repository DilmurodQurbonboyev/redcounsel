@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')
    <div class="main-content">
        <section class="leader">
            <div class="container">
                <div class="leader-name">
                    <span>{{ $category->title ?? '' }}</span>
                </div>
                <div class="leader-row">
                    <div class="row">
                        @foreach($leaders as $leader)
                            <div class="col-xl-12">
                                <a href="#">
                                    <div class="leader-island">
                                        <div class="leader-top">
                                            <div class="leader-left">
                                                <div class="leader-img">
                                                    @if($leader->anons_image)
                                                        <img src="{{ $leader->anons_image ?? '' }}" alt="leader">
                                                    @else
                                                        <img src="{{ asset('img/noImage.jpg') }}" alt="leader">
                                                    @endif
                                                </div>
                                                <div class="leader-left-text">
                                                    <div class="leader-left-text-top">
                                                        <span>{{ $leader->leader ?? '' }}</span>
                                                    </div>
                                                    <div class="leader-left-text-bottom">
                                                        <span>{{ $leader->title ?? '' }}</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="leader-bottom-bottom mt-2">
                                                                <span>{{ tr('Phone') }}</span>
                                                            </div>
                                                            <div class="leader-bottom-top">
                                                                <span>{{ $leader->phone ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="leader-bottom-bottom mt-2">
                                                                <span>{{ tr('Email') }}</span>
                                                            </div>
                                                            <div class="leader-bottom-top">
                                                                <span>{{ $leader->email ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="leader-bottom-bottom mt-2">
                                                                <span>{{ tr('Reception') }}</span>
                                                            </div>
                                                            <div class="leader-bottom-top">
                                                                <span>{{ $leader->reception ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="leader-bottom-bottom mt-2">
                                                                <span>{{ tr('Fax') }}</span>
                                                            </div>
                                                            <div class="leader-bottom-top">
                                                                <span>{{ $leader->fax ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-nav">
                                                            <div id="headingOne">
                                                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse-biography-{{ $leader->id }}" aria-expanded="false" aria-controls="collapse-biography-{{ $leader->id }}">
                                                                    {{ tr('Biography') }}
                                                                </button>
                                                            </div>
                                                            <div id="headingTwo">
                                                                <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse-function-{{ $leader->id }}" aria-expanded="false" aria-controls="collapse-function-{{ $leader->id }}">
                                                                    {{ tr('Functions') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-">
                                                            <div id="collapse-biography-{{ $leader->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                  {!! $leader->biography ?? '' !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-">
                                                            <div id="collapse-function-{{ $leader->id }}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    {!! $leader->description ?? '' !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
