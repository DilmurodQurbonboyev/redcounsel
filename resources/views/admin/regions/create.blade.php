@extends('admin.layouts.app')
@section('title')
    {{ tr('Create Region') }}
@endsection
@section('header')
    <x-admin.breadcrumb :title="'Create Region'" :breadcrumb="'regions/create'"/>
@endsection
@section('content')
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-body">
           <form action="{{ route('regions.store') }}" method="post">
                @csrf
                @include('admin.regions._form')
                @include('admin.layouts.save-button')
            </form>
        </div>
    </div>
@endsection
