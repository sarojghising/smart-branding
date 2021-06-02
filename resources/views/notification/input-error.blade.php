@if ($errors->has($fieldName))
<div class="invalid-feedback">
    {{ $errors->first($fieldName) }}
</div>
@endif
