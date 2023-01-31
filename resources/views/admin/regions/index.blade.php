@extends('admin.layouts.app')
@section('title')
    {{ tr('Regions') }}
@endsection
@section('header')
    <x-admin.breadcrumb :title="'Regions'" :breadcrumb="'regions'" />
@endsection
@section('content')
    <livewire:region/>
@endsection
