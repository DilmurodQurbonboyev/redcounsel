@extends('frontend.layouts.app')
@section('title')
    {{ $category->title ?? '' }}
@endsection
@section('content')
    <div class="main-content">
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
            <div class="accordion" id="accordionExample">
                @foreach($lists as $list)
                    <div class="card">
                        <div class="card-header" id="heading-{{ $list->id }}">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapse-{{ $list->id }}" aria-expanded="false"
                                        aria-controls="collapse-{{ $list->id }}">
                                    {{ $list->list_title ?? '' }}
                                </button>
                            </h2>
                        </div>
                        <div id="collapse-{{ $list->id }}" class="collapse" aria-labelledby="heading-{{ $list->id }}"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                {!! $list->list_description ?? '' !!}
                                {!! $list->list_content ?? '' !!}
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
@endsection
