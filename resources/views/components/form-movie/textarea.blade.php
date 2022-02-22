@props(['name'])

<div class="form-outline mb-4">
    <label class="form-label" for="{{ $name }}">{{ ucwords($name) }}</label>
    <textarea class="form-control form-control-lg" name="{{ $name }}" id="{{ $name }}" cols="30" rows="7" required>{{ old($name) }}</textarea>

    <x-form-movie.error name='{{ $name }}' />

</div>