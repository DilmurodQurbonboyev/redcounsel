<div class="tab-content my-tab-content">
    @foreach (Config::get('translatable.locales') as $lang)
        <div class="tab-pane fade show" id="{{ $lang }}" role="tabpanel" aria-labelledby="{{ $lang }}">
            <div class="form-group">
                <label for="title_{{ $lang }}" class="@error('address_'.$lang) text-danger @enderror">
                    {{ tr('Address') }}
                </label>
                <input type="text" name="address_{{ $lang }}"
                       class="form-control @error('address_'.$lang) is-invalid @enderror"
                       id="address_{{ $lang }}"
                       value="{{ old('address_'.$lang, $contacts->translate($lang)->address ?? '') }}">
                @error('address_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="reception_{{ $lang }}" class="@error('reception_'.$lang) text-danger @enderror">
                    {{ tr('Reception') }}
                </label>
                <input type="text" name="reception_{{ $lang }}"
                       class="form-control @error('reception_'.$lang) is-invalid @enderror"
                       id="reception_{{ $lang }}"
                       value="{{ old('reception_'.$lang, $contacts->translate($lang)->reception ?? '') }}">
                @error('reception_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="working_time_{{ $lang }}" class="@error('working_time_'.$lang) text-danger @enderror">
                    {{ tr('Working Time') }}
                </label>
                <input type="text" name="working_time_{{ $lang }}"
                       class="form-control @error('working_time_'.$lang) is-invalid @enderror"
                       id="working_time_{{ $lang }}"
                       value="{{ old('working_time_'.$lang, $contacts->translate($lang)->working_time ?? '') }}">
                @error('working_time_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lunch_{{ $lang }}" class="@error('lunch_'.$lang) text-danger @enderror">
                    {{ tr('Lunch') }}
                </label>
                <input type="text" name="lunch_{{ $lang }}"
                       class="form-control @error('lunch_'.$lang) is-invalid @enderror"
                       id="lunch_{{ $lang }}"
                       value="{{ old('lunch_'.$lang, $contacts->translate($lang)->lunch ?? '') }}">
                @error('lunch_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="landmark_{{ $lang }}" class="@error('landmark_'.$lang) text-danger @enderror">
                    {{ tr('Landmark') }}
                </label>
                <input type="text" name="landmark_{{ $lang }}"
                       class="form-control @error('landmark_'.$lang) is-invalid @enderror"
                       id="landmark_{{ $lang }}"
                       value="{{ old('landmark_'.$lang, $contacts->translate($lang)->landmark ?? '') }}">
                @error('landmark_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="transport_{{ $lang }}" class="@error('transport_'.$lang) text-danger @enderror">
                    {{ tr('Transport') }}
                </label>
                <input type="text" name="transport_{{ $lang }}"
                       class="form-control @error('transport_'.$lang) is-invalid @enderror"
                       id="transport_{{ $lang }}"
                       value="{{ old('transport_'.$lang, $contacts->translate($lang)->transport ?? '') }}">
                @error('transport_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="weekend_{{ $lang }}" class="@error('weekend_'.$lang) text-danger @enderror">
                    {{ tr('Weekend') }}
                </label>
                <input type="text" name="weekend_{{ $lang }}"
                       class="form-control @error('weekend_'.$lang) is-invalid @enderror"
                       id="weekend_{{ $lang }}"
                       value="{{ old('weekend_'.$lang, $contacts->translate($lang)->weekend ?? '') }}">
                @error('weekend_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="press_service_{{ $lang }}" class="@error('press_service_'.$lang) text-danger @enderror">
                    {{ tr('Press Service') }}
                </label>
                <input type="text" name="press_service_{{ $lang }}"
                       class="form-control @error('press_service_'.$lang) is-invalid @enderror"
                       id="press_service_{{ $lang }}"
                       value="{{ old('press_service_'.$lang, $contacts->translate($lang)->press_service ?? '') }}">
                @error('press_service_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="support_{{ $lang }}" class="@error('support_'.$lang) text-danger @enderror">
                    {{ tr('Technical support of the site') }}
                </label>
                <input type="text" name="support_{{ $lang }}"
                       class="form-control @error('support_'.$lang) is-invalid @enderror"
                       id="support_{{ $lang }}"
                       value="{{ old('support_'.$lang, $contacts->translate($lang)->support ?? '') }}">
                @error('support_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    @endforeach
</div>
<div class="form-group">
    <label for="phone">{{ tr('Phone') }}</label>
    <textarea id="phone" name="phone" class="form-control">{{ old('phone', $contacts->phone ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="phone2">{{ tr('Phone') }}</label>
    <textarea id="phone2" name="phone2" class="form-control">{{ old('phone2', $contacts->phone2 ?? '') }}</textarea>
</div>
<div class="form-group">
    <label for="chancellery">{{ tr('Chancellery') }}</label>
    <input type="text" id="chancellery" name="chancellery" class="form-control"
           value="{{ old('chancellery', $contacts->chancellery ?? '') }}">
</div>
<div class="form-group">
    <label for="fax">{{ tr('Fax') }}</label>
    <input type="text" id="fax" name="fax" class="form-control" value="{{ old('fax', $contacts->fax ?? '') }}">
</div>
<div class="form-group">
    <label for="hr_department">{{ tr('Hr Department') }}</label>
    <input type="text" id="hr_department" name="hr_department" class="form-control"
           value="{{ old('hr_department', $contacts->hr_department ?? '') }}">
</div>
<div class="form-group">
    <label for="latitude">{{ tr('Latitude') }}</label>
    <input id="latitude" name="latitude" class="form-control" value="{{ old('latitude', $contacts->latitude ?? '') }}"/>
</div>
<div class="form-group">
    <label for="longitude">{{ tr('Longitude') }}</label>
    <input id="longitude" name="longitude" class="form-control"
           value="{{old('longitude', $contacts->longitude ?? '')}}"/>
</div>
<div class="form-group">
    <label for="email">{{ tr('Email') }}</label>
    <input type="email" name="email" id="email" class="form-control"
           value="{{ old('phone', $contacts->email ?? '' )}}"/>
</div>
