@extends('frontend.layouts.app')

@section('title')
    {{ tr('Appeal') }}
@endsection

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="application-in">
                <div class="application-title">
                    <span>{{ tr('Check the status of the application') }}</span>
                </div>
                <div class="application-form">
                    <form action="{{ route('statusPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="text" class="input form-control" id="code" name="code"
                                   value="{{ old('code') }}"
                                   placeholder="{{ tr('Write application number') }}"/>
                            @error('code')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="sumbit">{{ tr('Send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
