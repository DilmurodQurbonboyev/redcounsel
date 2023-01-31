@extends('admin.layouts.app')
@section('title')
    {{ tr('Update Region') }}
@endsection
@section('header')
    <x-admin.breadcrumb :title="'Update Region'" :breadcrumb="'regions/edit'" :id="$region->id" />
@endsection
@section('content')
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
        </div>
        <div class="card-body">
            <form action="{{ route('regions.update', $region->id) }}" method="post">
                @csrf
                @method('PATCH')
                @include('admin.regions._form')
                @include('admin.layouts.update-button')
            </form>
        </div>
    </div>
@endsection
