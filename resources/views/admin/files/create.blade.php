@extends('admin.layouts.app')
@section('title')
    {{ tr('Create Message') }}
@endsection
@section('header')
    <div class="col-sm-6">
        <h1>{{ tr('Create File') }}</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        </ol>
    </div>
@endsection
@section('content')
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
        </div>
        <div class="card-body">
            <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.files._form')
                @include('admin.layouts.save-button')
            </form>
        </div>
    </div>
@endsection
