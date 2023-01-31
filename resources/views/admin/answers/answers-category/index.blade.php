@extends('admin.layouts.app')
@section('title')
{{ tr('Answer Categories') }}
@endsection
@section('header')
<div class="col-sm-6">
    <h1>{{ tr('Answer Categories') }}</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        {{ Breadcrumbs::render('answers-category') }}
    </ol>
</div>
@endsection
@section('content')
<livewire:answers-category />
@endsection
