@extends('frontend.layouts.app')

@section('title')
    {{ tr('Appeal') }}
@endsection

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="application-in">
                <div class="application-title">
                    <span>{{tr('Online reception')}}</span>
                </div>
                <div class="application-form">
                    <form action="{{ route('appealPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="fullname"
                                   class="form-label @error('fullname') text-danger @enderror">{{ tr('Fullname') }}</label>
                            <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                   name="fullname" id="fullname" value="{{ old('fullname') }}">
                            @error('fullname')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="organization"
                                   class="form-label @error('organization') text-danger @enderror">{{ tr('Organization') }}</label>
                            <input type="text" class="form-control @error('organization') is-invalid @enderror"
                                   name="organization" id="organization" value="{{old('organization')}}">
                            @error('organization')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone"
                                   class="form-label @error('phone') text-danger @enderror">{{ tr('Phone') }}</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" id="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="email"
                                   class="form-label @error('email') text-danger @enderror">{{tr('Email')}}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="appeal_type"
                                   class="form-label @error('appeal_type') text-danger @enderror">{{tr('The content of the appeal')}}</label>
                            <select class="form-control select2 @error('appeal_type') is-invalid @enderror"
                                    name="appeal_type" id="appeal_type">
                                <option value>{{tr('Select')}}</option>
                                <option value="1" {{ old('appeal_type', $appeal->appeal_type) == 1 ? 'selected' : '' }}>{{ tr('Question') }}</option>
                                <option value="2" {{ old('appeal_type', $appeal->appeal_type) == 2 ? 'selected' : '' }}>{{ tr('Objection') }}</option>
                                <option value="3" {{ old('appeal_type', $appeal->appeal_type) == 3 ? 'selected' : '' }}>{{tr('Question about licensing')}}</option>
                                <option
                                    value="4" {{ old('appeal_type', $appeal->appeal_type) == 4 ? 'selected' : '' }}>{{tr('Appeal to the management of the inspectorate')}}</option>
                                <option value="5" {{ old('appeal_type', $appeal->appeal_type) == 5 ? 'selected' : '' }}>{{tr('Selection application')}}</option>
                                <option value="6" {{ old('appeal_type', $appeal->appeal_type) == 6 ? 'selected' : '' }}>{{tr('Job application')}}</option>
                            </select>
                            @error('appeal_type')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="address"
                                   class="form-label @error('address') text-danger @enderror">{{tr('Address')}}</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                   name="address" id="address" value="{{ old('address') }}">
                            @error('address')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="region_id"
                                   class="form-label @error('region_id') text-danger @enderror">{{ tr('Choose a regional department') }}</label>
                            <select class="form-control select2 @error('region_id') is-invalid @enderror"
                                    name="region_id" id="region_id">
                                <option value>{{tr('Select')}}</option>
                                <option
                                    value="1735" {{ old('region_id', $appeal->region_id) == 1735 ? 'selected' : '' }}>{{ tr('Territorial Department of the Republic of Karakalpakstan') }}</option>
                                <option value="1703" {{ old('region_id', $appeal->region_id) == 1703 ? 'selected' : '' }}>{{ tr('Regional Department of Andijan region') }}</option>
                                <option value="1733" {{ old('region_id', $appeal->region_id) == 1733 ? 'selected' : '' }}>{{ tr('Regional Department of Khorezm region') }}</option>
                                <option value="1730" {{ old('region_id', $appeal->region_id) == 1730 ? 'selected' : '' }}>{{ tr('Regional Department of Fergana region') }}</option>
                                <option
                                    value="1710" {{ old('region_id', $appeal->region_id) == 1710 ? 'selected' : '' }}>{{ tr('Regional Department of kashkadarya region') }}</option>
                                <option
                                    value="1714" {{ old('region_id', $appeal->region_id) == 1714 ? 'selected' : '' }}>{{ tr('Territorial Department of Namangan region') }}</option>
                                <option value="1712" {{ old('region_id', $appeal->region_id) == 1712 ? 'selected' : '' }}>{{ tr('Territorial Department of Navoi region') }}</option>
                                <option value="1706" {{ old('region_id', $appeal->region_id) == 1706 ? 'selected' : '' }}>{{ tr('Regional Department of Bukhara region') }}</option>
                                <option value="1708" {{ old('region_id', $appeal->region_id) == 1708 ? 'selected' : '' }}>{{ tr('Regional Department of Jizzakh region') }}</option>
                                <option
                                    value="1718" {{ old('region_id', $appeal->region_id) == 1718 ? 'selected' : '' }}>{{ tr('Regional Department of Samarkand region') }}</option>
                                <option
                                    value="1722" {{ old('region_id', $appeal->region_id) == 1722 ? 'selected' : '' }}>{{ tr('Regional Department of Surkhandarya region') }}</option>
                                <option value="1727" {{ old('region_id', $appeal->region_id) == 1727 ? 'selected' : '' }}>{{ tr('Tashkent regional department') }}</option>
                                <option
                                    value="1726" {{ old('region_id', $appeal->region_id) == 1726 ? 'selected' : '' }}>{{ tr('Tashkent Laboratory of control and chemistry') }}</option>
                                <option value="1724" {{ old('region_id', $appeal->region_id) == 1724 ? 'selected' : '' }}>{{ tr('Regional Department of Syrdarya region') }}</option>
                            </select>
                            @error('region_id')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="file"
                                   class="form-label @error('file') text-danger @enderror">{{tr('File')}}</label>
                            <input class="form-control @error('file') is-invalid @enderror" type="file"
                                   name="file" id="file">
                            @error('file')
                            <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="message" class="form-label">{{tr('Content')}}</label>
                            <textarea class="form-control" name="message" id="message" rows="3">{{ old('message') }}</textarea>
                        </div>
                        <div class="form-group mb-2">
                            <p class="@error('_answer') text-danger @enderror">Captcha</p>
                            {!!getCaptchaBox()!!}
                            @error('_answer')
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
