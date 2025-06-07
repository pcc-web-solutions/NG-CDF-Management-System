@props([
    'id',
    'label' => 'Password',
    'model' => '',
    'icon' => null,
])

<div x-data="{ show: false }" class="relative">
    <input
        :type="show ? 'text' : 'password'"
        id="{{ $id }}"
        wire:model.defer="{{ $model }}"
        placeholder="{{ $label }}"
        {{ $attributes->merge([
            'class' =>
                'peer w-full border border-gray-300 px-10 pt-5 pb-2 rounded-lg placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500'
        ]) }}
    />

    <label for="{{ $id }}"
        class="absolute left-10 top-2 text-gray-500 text-sm transition-all
               peer-placeholder-shown:top-4 peer-placeholder-shown:text-base
               peer-placeholder-shown:text-gray-400 peer-focus:top-2
               peer-focus:text-sm peer-focus:text-blue-600">
        {{ $label }}
    </label>

    @if ($icon)
        <div class="absolute left-3 top-3.5 text-gray-400">{!! $icon !!}</div>
    @endif

    <button type="button" @click="show = !show"
        class="absolute right-3 top-3.5 text-gray-500 focus:outline-none text-sm">
        <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
        <svg x-show="show" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.04 10.04 0 012.776-4.158M6.22 6.22a10.05 10.05 0 015.78-1.22c4.477 0 8.268 2.943 9.542 7a9.956 9.956 0 01-1.267 2.572M6.22 6.22L3 9m0 0l18 18" /></svg>
    </button>

    @error($model)
        <span class="text-sm text-red-600">{{ $message }}</span>
    @enderror
</div>
