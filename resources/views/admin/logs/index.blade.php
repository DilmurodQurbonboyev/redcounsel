@extends('admin.layouts.app')
@section('title')
    {{ MessageService::tr('Logs') }}
@endsection
@section('header')
    <x-admin.breadcrumb :title="'Logs'" :breadcrumb="'logs'" />
@endsection
@section('content')
    <livewire:admin.site-log />
@endsection
