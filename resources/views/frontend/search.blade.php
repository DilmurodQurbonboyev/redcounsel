@extends('frontend.layouts.app')
@section('title')
    {{ tr('Search') }}
@endsection
@section('content')
<div class="main-content">
    <div class="search-list">
        <div class="container">
            <div class="main-title">
                <span>{{ tr('Search') }}</span>
            </div>
            @forelse($lists as $list)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $list->title ?? '' }}</h5>
                    <p class="card-text">{!! $list->description ?? '' !!}</p>
                    <a href="{{ route($list->list_type_id == '1' ? 'news' : 'pages', $list->slug) }}" class="btn btn-primary">{{ tr('More') }}</a>
                </div>
            </div>
            @empty
                <div class="simple-list">
                    <ul>
                        <div class="alert alert-success col-md-12 mt-3">
                            {{ tr('No result found') }}...
                        </div>
                    </ul>
                </div>
            @endforelse
        </div>
    </div>
    <div class="pagination-div">
        {{ $lists->links('frontend.layouts.pagination') }}
    </div>
</div>
@endsection
