@props(['value'])
<option value="{{ $value ?? $slot }}">
    {{ $slot}}
</option>