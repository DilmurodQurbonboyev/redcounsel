<div class="form-group">
    <label for="{{ $name }}">{{ tr('Description') }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control" cols="30" rows="3">{{ $value ?? '' }}</textarea>
</div>
