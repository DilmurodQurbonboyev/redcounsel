@extends('admin.layouts.app')
@section('title')
{{tr('Update Answer')}}
@endsection
@section('header')
<x-admin.breadcrumb :title="'Update Pages'" :breadcrumb="'answers/edit'" :id="$answers->id" />
@endsection

@section('content')
<div class="card card-primary card-outline card-tabs">
    <form action="{{ route('answers.update', $answers->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            @include('admin.answers.answers._form')
            @include('admin.layouts.update-button')
        </div>
    </form>
</div>
@endsection
