@extends('admin.layouts.app')
@section('title')
{{ tr('About Answer Category') }}
@endsection
@section('header')
<x-admin.breadcrumb-show :show="$answersCategory->title ?? '' " :breadcrumb="'answers-category/show'"
    :id="$answersCategory->id" />
@endsection
@section('content')
<x-admin.category.show-table :param="$answersCategory" :route="'answers-category'" />
@endsection
