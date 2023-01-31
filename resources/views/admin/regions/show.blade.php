@extends('admin.layouts.app')
@section('title')
    {{ tr('About Menu Category') }}
@endsection
@section('header')
    <x-admin.breadcrumb-show :show="$region->title ?? '' " :breadcrumb="'regions/show'" :id="$region->id"/>
@endsection
<?php

$name = 'name_' . app()->getLocale()
?>
@section('content')
    <div class="p-3 d-flex justify-content-end" style="grid-gap: 2px">
        <button onclick="print()" class="cards btn btn-secondary">
            <i class="fas fa-print"></i>
        </button>
        <a class="cards btn btn-success" href="{{ route('regions.create') }}">
            <i class="fa fa-plus"></i>
        </a>
        <a class="cards btn btn-info text-white" href="{{ route('regions.index') }}">
            <i class="fa fa-list"></i>
        </a>
        <a class="cards btn btn-primary" href="{{ route('regions.edit', $region->id) }}">
            <i class="fa fa-edit"></i>
        </a>
        <form method="POST" action="{{ route('regions.destroy', $region->id) }}">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="cards btn btn-danger deleteBtn">
                <span class="fas fa-eraser"></span></button>
        </form>
    </div>
    <div class="card card-primary card-outline card-tabs">
        <div class="card-body">
            <div class="tab-content">
                <div class="table-responsive">
                    <table class="table  table-striped table-hover">
                        <tbody>
                        <tr>
                            <td>{{ tr('Parent Region') }}</td>
                            <th>
                                @if ($region->parent_id !== null)
                                    {{ $region->parent->{$name} ?? '' }}
                                @else
                                    {{ tr('Main Category') }}
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <td>{{ tr('Id') }}</td>
                            <th scope="row">{{ $region->id }}</th>
                        </tr>
                        <tr>
                            <td>{{ tr('Title Oz') }}</td>
                            <th scope="row">{{ $region->name_oz ?? '' }}</th>
                        </tr>
                        <tr>
                            <td>{{ tr('Title Uz') }}</td>
                            <th scope="row">{{ $region->name_uz ?? '' }}</th>
                        </tr>
                        <tr>
                            <td>{{ tr('Title Ru') }}</td>
                            <th scope="row">{{ $region->name_ru ?? '' }}</th>
                        </tr>
                        <tr>
                            <td>{{ tr('Title En') }}</td>
                            <th scope="row">{{ $region->name_en ?? '' }}</th>
                        </tr>
                        <tr>
                            <td>{{ tr('Regional Center') }}</td>
                            <th>{{ $region->regional_center ?? '' }}</th>
                        </tr>
                        <tr>
                            <td>{{ tr('Created At') }}</td>
                            <th scope="row">
                                {{ $region->created_at->format('d.m.Y') }} <br/>
                                {{ $region->created_at->format('H:i') }}
                            </th>
                        </tr>
                        <tr>
                            <td>{{ tr('Updated At') }}</td>
                            <th scope="row">
                                {{ $region->updated_at->format('d.m.Y') }} <br/>
                                {{ $region->updated_at->format('H:i') }}
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
