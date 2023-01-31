@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="foto">
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
                                <a data-fancybox="gallery-{{ $list->id }}"
                                   data-src="{{$list->anons_image ?? ''}}">
                                    <div class="foto-list-img">
                                        <img src="{{$list->anons_image ?? ''}}"
                                             alt="foto-info">
                                    </div>
                                    <div class="foto-list-coment">
                                        <span>{{ $list->list_title ?? '' }}</span>
                                    </div>
                                </a>
                                <div style="display:none">
                                        <?php
                                        if (!empty($list->body_image) && is_array(explode(',', $list->body_image))) {
                                            $bodyImages = explode(',', $list->body_image);
                                        }
                                        ?>
                                    @foreach ($bodyImages as $i)
                                        @if ($i)
                                            <a data-fancybox="gallery-{{ $list->id }}" href="{{$i}}">
                                                <img class="rounded" src="{{$i}}" alt="{{ $i }}"/>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-div mt-5">
                    {{ $lists->links('frontend.layouts.pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
