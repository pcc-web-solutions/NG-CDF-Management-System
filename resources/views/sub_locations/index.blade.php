<x-layouts.app :title="__('Sub-Locations')">
    <div class="flex flex-col gap-4 rounded-xl p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">{{ __('Sub-Locations') }}</h1>
            <a href="{{ route('sub-locations.create') }}"
               class="btn-primary">{{ __('Add New Sub-Location') }}</a>
        </div>

        @livewire('sub-location-table') {{-- Your Livewire data table for sub-locations --}}

    </div>
</x-layouts.app>
