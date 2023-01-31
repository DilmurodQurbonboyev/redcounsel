@extends('frontend.layouts.app')
@section('title')
    {{ $category->title }}
@endsection

@section('content')
    <section class="news">
        <div class="container">
            <div class="next-sect">
                <div class="news-text">
                    <div class="news-text-h3 news-text-h3-2">
                        <div class="news-h3">
                            <h3>{{ $category->title ?? '' }}</h3>
                        </div>
                    </div>
                </div>
                <div class="news-navs">
                    <div class="news-row">
                        <div class="row">
                            @foreach($lists as $list)
                                <div class="col-xl-4 col-md-6">
                                    <div class="news-col">
                                        <div class="news-col-img">
                                            <img src="{{ $list->anons_image ?? ''}}"
                                                 alt="{{ $list->list_title ?? '' }}">
                                        </div>
                                        <div class="news-col-text">
                                            <div class="news-col-number">
                                                <div class="news-col-avg">
                                                    <span>{{ displayDateOnly($list->date) }}</span>
                                                </div>
                                                <div class="news-col-number-a">
                                                    <a href="{{ route('category', $list->category_slug) }}">
                                                        <span>{{ $list->category_title ?? '' }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="news-col-name">
                                                <span>{{ $list->list_title ?? '' }}</span>
                                            </div>
                                            <div class="news-col-info">
                                                <span>{{ $list->list_description ?? '' }}</span>
                                            </div>
                                            <div class="news-text-h3">
                                                <div class="news-a-info">
                                                    <a href="{{ route('news', $list->slug) }}">
                                                        <div class="news-a-info-span">
                                                            <span>{{ tr('More') }}</span>
                                                        </div>
                                                        <div class="news-info-img">
                                                            <img
                                                                src="{{ asset('img/add_circle_FILL0_wght400_GRAD0_opsz48.png') }}"
                                                                alt="news">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="news-col-dowl">
                                                    <x-frontend.share :route="$list->slug"/>
                                                </div>
                                            </div>
                                        </div>
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
        </div>
    </section>
@endsection
