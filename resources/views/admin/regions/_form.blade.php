<?php $name = 'name_' . app()->getLocale() ?>
<div class="form-group">
    <select class="form-control select2" name="parent_id" id="parent_id">
        <option value>{{ tr('Select') }}</option>
        @foreach($regionLists as $list)
            <option value="{{ $list->id }}" {{ $list->id == $region->parent_id ? 'selected' : '' }}>{{ $list->{$name} ?? '' }}</option>
        @endforeach
    </select>
</div>

<div class="card-header p-0 pt-1 border-bottom-0">
    <x-admin.language-tab/>
</div>

<div class="tab-content my-tab-content">
    <div class="tab-pane fade show" id="oz" role="tabpanel" aria-labelledby="oz">
        <div class="form-group">
            <label for="name_oz"
                   class="@error('name_oz') text-danger @enderror">{{ MessageService::tr('Title')}}</label>
            <input type="text" name="name_oz"
                   class="form-control @error('name_oz') is-invalid @enderror"
                   id="name_oz" value="{{ old('name_oz', $region->name_oz ?? '') }}">
            @error('name_oz')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="tab-pane fade" id="uz" role="tabpanel" aria-labelledby="uz">
        <div class="form-group">
            <label for="name_uz"
                   class="@error('name_uz') text-danger @enderror">{{ MessageService::tr('Title')}}</label>
            <input type="text" name="name_uz"
                   class="form-control @error('name_uz') is-invalid @enderror"
                   id="name_uz" value="{{ old('name_uz', $region->name_uz ?? '') }}">
            @error('name_uz')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru">
        <div class="form-group">
            <label for="name_ru"
                   class="@error('name_ru') text-danger @enderror">{{ MessageService::tr('Title')}}</label>
            <input type="text" name="name_ru"
                   class="form-control @error('name_ru') is-invalid @enderror"
                   id="name_ru" value="{{ old('name_ru', $region->name_ru ?? '') }}">
            @error('name_ru')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en">
        <div class="form-group">
            <label for="name_en"
                   class="@error('name_en') text-danger @enderror">{{ MessageService::tr('Title')}}</label>
            <input type="text" name="name_en"
                   class="form-control @error('name_en') is-invalid @enderror"
                   id="name_en" value="{{ old('name_en', $region->name_en ?? '') }}">
            @error('name_en')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<div class="form-group">
    <label for="regional_center"
           class="@error('regional_center') text-danger @enderror">{{ MessageService::tr('Region Center')}}</label>
    <input type="text" name="regional_center" class="form-control @error('regional_center') is-invalid @enderror"
           id="regional_center"
           value="{{ old('regional_center', $region->regional_center ?? '') }}">
    @error('regional_center')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
