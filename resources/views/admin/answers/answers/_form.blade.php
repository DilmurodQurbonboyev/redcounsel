<div class="form-group">
    <label for="lists_category_id">{{ tr('Category') }}</label>
    <select class="custom-select rounded-0 select2 @error('lists_category_id') is-invalid @enderror"
            name="lists_category_id" id="lists_category_id">
        <option value>{{ tr('Select Category') }}</option>
        @foreach ($answersCategories as $answersCategory)
            <option value="{{ $answersCategory->id }}" {{ old('lists_category_id', $answers->lists_category_id) ==
            $answersCategory->id ? 'selected' : '' }}>{{ $answersCategory->title }}</option>
        @endforeach
    </select>
    @error('lists_category_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="card-header p-0 pt-1 border-bottom-0">
    <x-admin.language-tab/>
</div>
<div class="tab-content my-tab-content">
    @foreach (Config::get('translatable.locales') as $lang)
        <div class="tab-pane fade show" id="{{ $lang }}" role="tabpanel" aria-labelledby="{{ $lang }}">
            <div class="form-group">
                <label for="title_{{ $lang }}">{{ tr('Title') }}</label>
                <input type="text" name="title_{{ $lang }}"
                       class="form-control @error('title_'.$lang) is-invalid @enderror"
                       id="title_{{ $lang }}" value="{{ old('title_'.$lang, $answers->translate($lang)->title ?? '') }}">
                @error('title_'.$lang)
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <x-admin.form.description name="description_{{ $lang }}"
                                      value="{!! old('description_'.$lang, $answers->translate($lang)->description ?? '') !!}"/>
        </div>
    @endforeach
</div>

<div class="form-group">
    <label for="order">{{ tr('Order') }}</label>
    <input type="number" name="order" class="form-control" id="order" value="{{ old('order', $answers->order ?? '50') }}">
</div>

<div class="form-group">
    <label for="date">{{ tr('Date') }}</label>
    <input type="text" class="form-control date" name="date" value="{{ old('date', $answers->date) }}"/>
</div>

<div class="form-group">
    <label for="status">{{ tr('Status') }}</label>
    <select class="custom-select rounded-0 select2" name="status" id="status">
        <option value="2" {{ old('status', $answers->status) == '2' ? 'selected' : '' }}>{{ tr('Active') }}</option>
        <option value="1" {{ old('status', $answers->status) == '1' ? 'selected' : '' }}>{{ tr('Inactive') }}</option>
    </select>
</div>
<input type="hidden" class="form-control" name="list_type_id" value="3">
