@props([
    'id',
    'label' => '',
    'model' => '',
    'options' => [],
    'icon' => null,
])

<div class="relative">
    <select
        id="{{ $id }}"
        wire:model.defer="{{ $model }}"
        {{ $attributes->merge([
            'class' =>
                'peer w-full border border-gray-300 px-10 pt-5 pb-2 rounded-lg bg-white placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500'
        ]) }}
    >
        <option value="" disabled selected hidden>{{ $label }}</option>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}">{{ $text }}</option>
        @endforeach
    </select>

    <label for="{{ $id }}"
        class="absolute left-10 top-2 text-gray-500 text-sm transition-all
               peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
               peer-placeholder-shown:text-gray-400 peer-focus:top-2
               peer-focus:text-sm peer-focus:text-blue-600">
        {{ $label }}
    </label>

    @if ($icon)
        <div class="absolute left-3 top-3.5 text-gray-400">
            {!! $icon !!}
        </div>
    @endif

    @error($model)
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>
