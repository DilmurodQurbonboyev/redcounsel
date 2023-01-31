@extends('admin.layouts.app')
@section('title')
    {{ tr('Update File') }}
@endsection
@section('header')


@endsection
@section('content')
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
        </div>
        <div class="card-body">
            <form action="{{ route('files.update', $file->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @include('admin.files._form')
                @include('admin.layouts.update-button')
            </form>
        </div>
    </div>
@endsection
