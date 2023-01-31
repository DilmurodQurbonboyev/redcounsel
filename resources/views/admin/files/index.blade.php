@extends('admin.layouts.app')
@section('title')
    {{ tr('Files') }}
@endsection
@section('header')
    <div class="col-sm-6">
        <h1>{{ tr('Files') }}</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{ Breadcrumbs::render('files') }}
        </ol>
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ tr('Files') }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 my-2">
                    <a class="btn btn-primary create-btn" href="{{ route('files.create') }}">
                        <i class="fas fa-plus-circle"></i>
                        {{ tr('Create File') }}
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-wrap">
                    <thead>
                    <tr>
                        <th>{{ tr('Id') }}</th>
                        <th>{{ tr('Title') }}</th>
                        <th>{{ tr('Path') }}</th>
                        <th>{{tr('Image')}}</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>
                            <input class="form-control" type="text" wire:model.debounce.300ms="filter_id">
                        </th>
                        <th>
                            <input class="form-control" type="text" wire:model.debounce.300ms="filter_title">
                        </th>
                        <th>
                            <input class="form-control" type="text" wire:model.debounce.300ms="filter_title">
                        </th>
                        <th>
                            <input class="form-control" type="text" wire:model.debounce.300ms="filter_title">
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file->id }}</td>
                            <td>{{ $file->title ?? '' }}</td>
                            <td>{{ $file->path ?? '' }}</td>
                            <td>{{ $file->image ?? '' }}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary m-1" href="{{ route('files.show', $file->id) }}"
                                   title="View" aria-label="View"><span class="fas fa-eye"></span>
                                </a>
                                <a class="btn btn-primary m-1" href="{{ route('files.edit', $file->id) }}"
                                   title="Янгилаш" aria-label="Янгилаш"><span class="fas fa-pencil-alt"></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
