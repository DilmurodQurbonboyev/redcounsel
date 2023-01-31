@extends('admin.layouts.app')
@section('title')
{{tr('Update Page Category')}}
@endsection
@section('header')
<x-admin.breadcrumb :title="'Update Page Category'" :breadcrumb="'answers-category/edit'" :id="$answersCategory->id" />
@endsection
@section('content')
<div class="card card-primary card-outline card-tabs">
    <div class="card-body">
        <form action="{{ route('answers-category.update', $answersCategory->id) }}" method="post">
            @csrf
            @method('PATCH')
            @include('admin.answers.answers-category._form')
            @include('admin.layouts.update-button')
        </form>
    </div>
</div>
@endsection
