@props([
    'label',
    'colSpan' => null
])
<div @if($colSpan) class="{{$colSpan}}" @endif>
    <label for="{{$attributes->get('id')}}" class="block font-medium text-sm text-gray-700">
        {{ $label }}
    </label>
    <input {{$attributes->merge(['class' => 'border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'])}}>
    @error($attributes->get('name'))
    <span class="text-sm text-red-600 space-y-1">{{$message}}</span>
    @enderror
</div>
