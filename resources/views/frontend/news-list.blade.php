@extends('frontend.layouts.app')
@section('title')
    {{ tr('News') }}
@endsection
@section('content')
    <div class="main-content">
        <section class="news">
            <div class="container">
                <div class="next-sect">
                    <div class="news-text">
                        <div class="news-text-h3 news-text-h3-2">
                            <div class="news-h3">
                                <h3>{{ tr('News') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="news-navs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">
                                    {{ tr('All') }}
                                </button>
                            </li>
                            @foreach($categories as $category)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-toggle="tab"
                                            data-target="#profile-{{$category->id}}" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false">
                                        {{ $category->title ?? '' }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="news-row">
                                    <div class="row">
                                        @foreach($news as $new)
                                            <div class="col-xl-4 col-md-6">
                                                <div class="news-col">
                                                    <div class="news-col-img">
                                                        <a href="{{ route('news', $new->slug) }}">
                                                            <img src="{{ $new->anons_image ?? '' }}" alt="news">
                                                        </a>
                                                    </div>
                                                    <div class="news-col-text">
                                                        <div class="news-col-number">
                                                            <div class="news-col-avg">
                                                                <span>{{ displayDateOnly($new->data) }}</span>
                                                            </div>
                                                            <div class="news-col-number-a">
                                                                <a href="{{ route('category', $new->category_slug) }}">
                                                                    <span>{{$new->category_title ?? ''}}</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="news-col-name">
                                                            <a href="{{ route('news', $new->slug) }}">{{ $new->title ?? '' }}</a>
                                                        </div>
                                                        <div class="news-col-info">
                                                            <span>{!! $new->description ?? '' !!}</span>
                                                        </div>
                                                        <div class="news-text-h3">
                                                            <div class="news-a-info">
                                                                <a href="{{ route('news', $new->slug) }}">
                                                                    <div class="news-a-info-span">
                                                                        <span>{{ tr('More') }}</span>
                                                                    </div>
                                                                    <div class="news-info-img">
                                                                        <img src="{{ asset('img/add.png') }}"
                                                                             alt="news">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="news-col-dowl">
                                                                <x-frontend.share :route="$new->slug"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @foreach($categories as $category)
                                <div class="tab-pane fade" id="profile-{{ $category->id }}" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div class="news-row">
                                        <div class="row">
                                            @foreach($category->lists as $list)
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="news-col">
                                                        <div class="news-col-img">
                                                            <a href="{{ route('news', $list->slug) }}">
                                                                <img src="{{ $list->anons_image ?? '' }}"
                                                                     alt="{{ $list->title ?? '' }}">
                                                            </a>
                                                        </div>
                                                        <div class="news-col-text">
                                                            <div class="news-col-number">
                                                                <div class="news-col-avg">
                                                                    <span>{{ displayDateOnly($list->date) }}</span>
                                                                </div>
                                                                <div class="news-col-number-a">
                                                                    <a href="{{ route('category', $list->category->slug) }}">
                                                                        <span>{{$list->category->title ?? ''}}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="news-col-name">
                                                                <a href="{{ route('news', $list->slug) }}">{{ $list->title ?? '' }}</a>
                                                            </div>
                                                            <div class="news-col-info">
                                                                <span>{!! $list->description ?? '' !!}</span>
                                                            </div>
                                                            <div class="news-text-h3">
                                                                <div class="news-a-info">
                                                                    <a href="{{ route('news', $list->slug) }}">
                                                                        <div class="news-a-info-span">
                                                                            <span>{{ tr('More') }}</span>
                                                                        </div>
                                                                        <div class="news-info-img">
                                                                            <img src="{{ asset('img/add.png') }}"
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
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pagination-div">
                    {{ $news->links('frontend.layouts.pagination') }}
                </div>
            </div>
        </section>
    </div>
@endsection
