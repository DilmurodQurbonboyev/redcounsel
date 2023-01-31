@extends('admin.layouts.app')
@section('title')
{{ MessageService::tr('About News Category')}}
@endsection

@section('header')
<x-admin.breadcrumb-show :show="$users->name ?? '' " :breadcrumb="'users/show'" :id="$users->id" />
@endsection
@section('content')
<div class="p-3 d-flex justify-content-end" style="grid-gap: 2px">
    <button onclick="print()" class="cards btn btn-secondary">
        <i class="fas fa-print"></i>
    </button>
    <a class="cards btn btn-info text-white" href="{{ route('users.index') }}">
        <i class="fa fa-list"></i>
    </a>
    <form method="POST" action="{{ route('users.destroy', $users->id) }}">
        @csrf
        @method('DELETE')
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="cards btn btn-danger">
            <i class="fa fa-trash"></i></button>
    </form>
</div>
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#user" data-toggle="tab" role="tab" aria-controls="user"
                    aria-selected="true">
                    {{ MessageService::tr('User') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#w2-tab2" data-toggle="tab" role="tab" aria-controls="w2-tab2"
                    aria-selected="true">
                    {{ MessageService::tr('Roles') }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="user" class="tab-pane active"><br>
                <table id="w0" class="table table-striped table-bordered ">
                    <tbody>
                        <tr>
                            <th>{{ MessageService::tr('Id') }}</th>
                            <td>{{ $users->id }}</td>
                        </tr>
                        <tr>
                            <th>{{ MessageService::tr('Name') }}</td>
                            <td>{{ $users->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>{{ MessageService::tr('Email') }}</th>
                            <td>{{ $users->email ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>{{ MessageService::tr('Created At') }}</th>
                            <td>{{ $users->created_at }}</td>
                        </tr>
                        <tr>
                            <th>{{ MessageService::tr('Updated At') }}</th>
                            <td>{{ $users->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="w2-tab2" class="tab-pane"><br>
                <div class="row">
                    <div class="col-xl-12">
                        <p>
                            <a class="btn btn-primary cards" href="{{ route('users.edit', $users->id) }}">
                                {{ MessageService::tr('Assign Role') }}
                            </a>
                        </p>
                    </div>
                    <br>
                    <div class="col-xl-12">
                        @foreach ($users->userRoleLink as $role)
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-9 col-md-6 col-sm-12 auth-name">
                                        {{ MessageService::tr('Authority') }}:
                                        <span class="text-bold authority-name">
                                            {{ $role->title ?? '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
