@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection

@section('content')
    <div class="main-content">
        <div class="video">
            <div class="container">
                <div class="main-title">
                    <span>{{ $category->title ?? '' }}</span>
                </div>
                <div class="expert-nav">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="expert-number">{{ tr('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="#">{{ $category->title ?? '' }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    @foreach($lists as $list)
                        <div class="col-xl-4 col-md-6">
                            <div class="foto-list-col">
                                @if($list->media_type == 5)
                                    <a data-fancybox="video-gallery"
                                       href="https://youtu.be/{{ $list->video_code ?? '' }}">
                                        <div class="foto-list-img play">
                                            <img src="{{ $list->image ?? '' }}" alt="{{ $list->list_title ?? '' }}"/>
                                        </div>
                                        <div class="foto-list-coment">
                                            <span>{{ $list->list_title ?? '' }}</span>
                                        </div>
                                    </a>
                                @endif
                                @if($list->media_type == 3)
                                    <a data-fancybox="video-gallery" href="{{ $list->video ?? '' }}">
                                        <div class="foto-list-img play">
                                            <img src="{{ $list->image ?? '' }}" alt="{{ $list->list_title ?? '' }}"/>
                                        </div>
                                        <div class="foto-list-coment">
                                            <span>{{ $list->list_title ?? '' }}</span>
                                        </div>
                                    </a>
                                @endif
                                @if($list->media_type == 4)
                                    <a data-fancybox="video-gallery"
                                       href="https://utube.uz/embed/{{ $list->video_code }}">
                                        <div class="foto-list-img play">
                                            <img src="{{ $list->image ?? '' }}" alt="{{ $list->list_title ?? '' }}"/>
                                        </div>
                                        <div class="foto-list-coment">
                                            <span>{{ $list->list_title ?? '' }}</span>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="pagination-div">
            {{ $lists->links('frontend.layouts.pagination') }}
        </div>
    </div>
@endsection
