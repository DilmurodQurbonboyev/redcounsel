@extends('admin.layouts.app')
@section('title')
    {{ tr('About Answer') }}
@endsection
@section('header')
    <x-admin.breadcrumb-show :show="$answers->title ?? '' " :breadcrumb="'answers/show'" :id="$answers->id"/>
@endsection
@section('content')
    <div class="p-3 d-flex justify-content-end" style="grid-gap: 2px">
        <button onclick="print()" class="cards btn btn-secondary">
            <i class="fas fa-print"></i>
        </button>
        <a class="cards btn btn-success" href="{{ route('answers.create') }}">
            <i class="fa fa-plus"></i>
        </a>
        <a class="cards btn btn-info text-white" href="{{ route('answers.index') }}">
            <i class="fa fa-list"></i>
        </a>
        <a class="cards btn btn-primary" href="{{ route('answers.edit', $answers->id) }}">
            <i class="fa fa-edit"></i>
        </a>
        <form method="POST" action="{{ route('answers.destroy', $answers->id) }}">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" class="cards btn btn-danger deleteBtn">
                <span class="fas fa-eraser"></span>
            </button>
        </form>
    </div>
    <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <x-admin.language-tab/>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach (Config::get('translatable.locales') as $lang)
                    <div class="tab-pane fade show" id="{{ $lang }}" role="tabpanel" aria-labelledby="{{ $lang }}">
                        <div class="table-responsive">
                            <table class="table  table-striped table-hover">
                                <tbody>
                                <tr>
                                    <td>{{ tr('Id') }}</td>
                                    <th scope="row">{{ $answers->id }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Category') }}</td>
                                    <th scope="row">
                                        @if ($answers->category != null)
                                            {{ $answers->category->title }}
                                        @else
                                            {{ tr('Main Category') }}
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Title') }}</td>
                                    <th scope="row">{{ $answers->translate($lang)->title ?? '' }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Slug') }}</td>
                                    <th scope="row">{{ $answers->slug }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Description') }}</td>
                                    <th scope="row">{!! $answers->translate($lang)->description ?? '' !!}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Content') }}</td>
                                    <th scope="row">{!! $answers->translate($lang)->content ?? '' !!}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Anons Image') }}</td>
                                    <th>
                                        @if ($answers->anons_image == null)
                                            <span class="text-danger">{{ tr('No Image') }}</span>
                                        @else
                                            <a data-fancybox="single" href="{{ $answers->anons_image }}">
                                                <div class="foto-in">
                                                    <img width="300px" src="{{ $answers->anons_image }}"/>
                                                </div>
                                            </a>
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Body Image') }}</td>
                                    <th>
                                        <div class="row">
                                            @php
                                                $res = explode(',', $answers->body_image);
                                            @endphp
                                            @foreach ($res as $i)
                                                @if ($i)
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="foto">
                                                            <a data-fancybox="single" href="{{ $i }}">
                                                                <div class="foto-in">
                                                                    <img width="100%" src="{{ $i }}"/>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Pdf title') }}</td>
                                    <th>{{ $answers->translate($lang)->pdf_title ?? '' }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Pdf') }}</td>
                                    <th scope="row">
                                        @if($answers->pdf)
                                            <i class="far fa-file-pdf"></i>
                                            <a href="{{ $answers->pdf }}" class="text-dark" target="__blank">
                                                {{ $answers->translate($lang)->pdf ?? '' }}
                                            </a>
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Date') }}</td>
                                    <th>{{ $answers->date }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Order') }}</td>
                                    <th>{{ $answers->order }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Status') }}</td>
                                    <th scope=" row">
                                        @if ($answers->status == 2)
                                            <span class="badge bg-success p-2">{{ tr('Active') }}</span>
                                        @else
                                            <span class="badge bg-danger p-2">{{ tr('Inactive') }}</span>
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Creator') }}</td>
                                    <th scope="row">{{ Str::ucfirst($answers->users->name) }}</th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Modifier') }}</td>
                                    <th scope="row">
                                        @if ($answers->modifier_id)
                                            {{ Str::ucfirst($answers->modifiers->name) }}
                                        @else
                                            <span class="text-danger">{{ tr('Not set') }}</span>
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Created At') }}</td>
                                    <th scope="row">
                                        {{ $answers->created_at->format('d.m.Y') }} <br/>
                                        {{ $answers->created_at->format('H:i') }}
                                    </th>
                                </tr>
                                <tr>
                                    <td>{{ tr('Updated At') }}</td>
                                    <th scope="row">
                                        {{ $answers->updated_at->format('d.m.Y') }} <br/>
                                        {{ $answers->updated_at->format('H:i') }}
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
