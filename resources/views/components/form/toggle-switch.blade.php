@props([
    'model',
    'label' => '',
])

<div class="flex items-center space-x-3">
    <span class="text-gray-700">{{ $label }}</span>
    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" wire:model="{{ $model }}" class="sr-only peer">
        <div
            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-500 rounded-full peer peer-checked:bg-blue-600
                   after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full
                   after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full">
        </div>
    </label>
</div>
