@extends('admin.layouts.app')
@section('title')
{{tr('Create Answer')}}
@endsection
@section('header')
<x-admin.breadcrumb :title="'Create Answer'" :breadcrumb="'answers/create'" />
@endsection

@section('content')
<div class="card card-primary card-outline card-tabs">
    <form action="{{ route('answers.store') }}" method="post">
        @csrf
        <div class="card-body">
            @include('admin.answers.answers._form')
            @include('admin.layouts.save-button')
        </div>
    </form>
</div>
@endsection
