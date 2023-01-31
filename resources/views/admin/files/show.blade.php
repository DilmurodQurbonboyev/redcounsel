@extends('admin.layouts.app')
@section('title')
    {{tr('About Application')}}
@endsection
@section('header')
    <x-admin.breadcrumb-show :show="$file->id ?? '' " :breadcrumb="'files/show'" :id="$file->id"/>
@endsection
@section('content')
    <div class="p-3 d-flex justify-content-end" style="grid-gap: 2px">
        <a class="btn btn-info text-white cards" href="{{ route('files.index') }}">
            <i class="fa fa-list"></i>
        </a>
        <a class="btn btn-primary cards" href="{{ route('files.edit', $file->id) }}">
            <i class="fa fa-edit"></i>
        </a>
    </div>
    <div class="card card-primary card-outline card-tabs">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover styled-detail-view table-bordered mt-3">
                    <tbody>
                    <tr>
                        <th>{{ tr('Id') }}</th>
                        <td>{{ $file->id }}</td>
                    </tr>
                    <tr>
                        <th>{{ tr('Title') }}</th>
                        <td>{{ $file->title }}</td>
                    </tr>
                    <tr>
                        <th>{{ tr('Path') }}</th>
                        <td>{{ $file->path }}</td>
                    </tr>
                    <tr>
                        <th>{{ tr('Image') }}</th>
                        <td>
                            @if($file->image)
                                <img width="100%" src="{{ asset($file->image) }}" alt="">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>{{ tr('Created At') }}</th>
                        <td>
                            {{ $file->created_at->format('d.m.Y') }} <br/>
                            {{ $file->created_at->format('H:i') }}
                        </td>
                    </tr>
                    <tr>
                        <th>{{ tr('Updated At') }}</th>
                        <td>
                            {{ $file->updated_at->format('d.m.Y') }} <br/>
                            {{ $file->updated_at->format('H:i') }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
