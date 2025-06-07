<x-layouts.app :title="__('Create Sub-Location')">
    <div class="max-w-3xl mx-auto p-4 rounded-xl border border-neutral-200 dark:border-neutral-700">
        <h2 class="text-lg font-semibold mb-4">{{ __('Create New Sub-Location') }}</h2>

        @livewire('sub-location-form') {{-- Livewire form component for create/edit --}}
    </div>
</x-layouts.app>
