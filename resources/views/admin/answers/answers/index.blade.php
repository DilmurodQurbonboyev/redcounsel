@extends('admin.layouts.app')
@section('title')
{{tr('Answers')}}
@endsection
@section('header')
<x-admin.breadcrumb :title="'Answers'" :breadcrumb="'answers'" />
@endsection
@section('content')
<livewire:answers />
@endsection
