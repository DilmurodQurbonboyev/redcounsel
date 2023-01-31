@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')
    <div class="main-content">
        <div class="document">
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
                        <div class="col-lg-6">
                            <div class="documents-col">
                                <div class="documents-left">
                                    <a href="{{ $list->pdf ?? '#' }}">
                                        <img
                                            src="{{ file_extension($list->pdf) == 'pdf' ? asset('img/pdf.png') : asset('img/dokum.png') }}"
                                            alt="{{ $list->list_title ?? '' }}">
                                    </a>
                                </div>
                                <div class="documents-right">
                                    <div class="documents-name">
                                        <a href="{{ $list->pdf ?? '#' }}">
                                            {{ $list->list_title ?? '' }}
                                        </a>
                                    </div>
                                    <div class="documents-size">
                                        @if($list->pdf)
                                            <span>{{ filesize_formatted($list->pdf) }}</span>
                                        @endif
                                    </div>
                                    <div class="documents-download">
                                        <a href="{{ $list->pdf ?? '#' }}">{{ tr('Download') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-div">
                    {{ $lists->links('frontend.layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
