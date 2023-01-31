<div class="form-group">
    <label for="title">{{ tr('Title') }}</label>
    <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $file->title ?? '') }}"/>
</div>
<div class="form-group">
    <label for="path">{{ tr('Path') }}</label>
    <input type="text" id="path" name="path" class="form-control" value="{{ old('path', $file->path ?? '') }}"/>
</div>
<div class="form-group">
    <label for="template-image">{{ tr('Image') }}</label>
    <input type="file" name="template-image" id="template-image">
    @if($file->image)
        <div class="p-2">
            <img width="100%" src="{{ asset($file->image) }}" alt="">
        </div>
    @endif
</div>

