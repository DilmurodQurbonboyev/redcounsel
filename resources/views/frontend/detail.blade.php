@extends('frontend.layouts.app')
@section('title')
    {{ $list->category_title ?? '' }}
@endsection
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="news-detail">
                <div class="expert-name">
                    <span>{{ $list->list_title ?? '' }}</span>
                </div>
                <div class="expert-nav">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="expert-number">{{ tr('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="{{ route('category', $list->category_slug) }}">{{ $list->category_title ?? '' }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="news-date-nav">
                    <div class="news-date">
                        <img src="{{ asset('img/calendar.svg') }}" alt="calendar">
                        <span>{{ displayDateOnly($list->date) }}</span>
                    </div>
                    <div class="news-date">
                        <img src="{{ asset('img/eye.svg') }}" alt="eye">
                        <span>{{ $list->count_view ?? 0 }}</span>
                    </div>
                </div>
                <div class="news-description">
                    <span>{!! $list->description ?? '' !!}</span>
                </div>
                <div class="news-owl">
                    <div class="owl-carousel owl-theme">
                        @if($list->body_image)
                                <?php
                                if (!empty($list->body_image) && is_array(explode(',', $list->body_image))) {
                                    $bodyImages = explode(',', $list->body_image);
                                }
                                ?>
                            @foreach ($bodyImages as $i)
                                @if ($i)
                                    <div class="item">
                                        <img src="{{ $i }}" alt="{{ $list->title ?? '' }}">
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="news-content">
                    {!! $list->list_content ?? '' !!}
                </div>
                @if($list->pdf_type == 2 and $list->pdf)
                    <div class="pdf alert alert-primary">
                        <div class="pdf-out">
                            <div class="pdf-left">
                                <a href="{{ $list->pdf }}">
                                    <img src="{{ asset('img/dokum.png') }}" alt="document">
                                </a>
                            </div>
                            <div class="pdf-right">
                                <div class="pdf-name">
                                    <span>{{ $list->pdf_title ?? '' }}</span>
                                </div>
                                <div class="pdf-download">
                                    <a href="{{ $list->pdf }}">{{ tr('Download') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($list->pdf_type == 1 and $list->pdf)
                    <div class="pdf-in">
                        <iframe src="{{ $list->pdf }}" style="width: 100%; height:600px;"></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

