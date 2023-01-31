<div class="form-group">
    <label for="parent_id">{{ tr('Parent Category') }}</label>
    <select class="custom-select rounded-0 select2" name="parent_id" id="parent_id">
        <option value>{{ tr('Select Parent Category') }}</option>
        @foreach ($answersCategories as $answer)
        <option value="{{ $answer->id }}" {{ old('parent_id', $answersCategory->parent_id) == $answer->id ? 'selected' : ''
            }}>{{ $answer->title }}</option>
        @endforeach
    </select>
</div>
<div class="card-header p-0 pt-1 border-bottom-0">
    <x-admin.language-tab />
</div>
<div class="tab-content my-tab-content">
    @foreach (Config::get('translatable.locales') as $lang)
    <div class="tab-pane fade show" id="{{ $lang }}" role="tabpanel" aria-labelledby="{{ $lang }}">
        <div class="form-group">
            <label for="title_{{ $lang }}">{{ tr('Title') }}</label>
            <input type="text" name="title_{{ $lang }}" class="form-control @error('title_'.$lang) is-invalid @enderror"
                id="title_{{ $lang }}" value="{{ old('title_'.$lang, $answersCategory->translate($lang)->title ?? '') }}">
            @error('title_'.$lang)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    @endforeach
</div>
<div class="form-group">
    <label for="image" class="mb-2">{{ tr('Image') }}</label>
    <div class="input-group">
        <input id="thumbnail_image" class="form-control" type="text" name="image"
            value="{{ old('image', $answersCategory->image ?? '') }}">
        <span class=" input-group-btn">
            <a id="image" data-input="thumbnail_image" data-preview="holder" class="btn btn-primary">
                <i class="fas fa-images"></i>
                {{ tr('Choose') }}
            </a>
        </span>
    </div>
    @if($answersCategory->image)
    <img class="p-2" src="{{ $answersCategory->image }}" width="30%" alt="">
    @endif
</div>
<div class="form-group">
    <label for="status">{{ tr('Status') }}</label>
    <select class="custom-select rounded-0 select2" name="status" id="status">
        <option value="2" {{ old('status', $answersCategory->status) == '2' ? 'selected' : '' }}>{{tr('Active')}}</option>
        <option value="1" {{ old('status', $answersCategory->status) == '1' ? 'selected' : '' }}>{{tr('Inactive')}}
        </option>
    </select>
</div>
<input type="hidden" class="form-control" name="list_type_id" value="3">
