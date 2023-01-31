@extends('admin.layouts.app')
@section('title')
@endsection

@section('content')
    <x-admin.category.trashes :params="$answers" :title="'Answer Categories'" :route="'answers-category'" />
@endsection
