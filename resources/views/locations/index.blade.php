<x-layouts.app :title="__('Locations')">
    <div class="flex flex-col gap-4 rounded-xl p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">{{ __('Locations') }}</h1>
            <a href="{{ route('locations.create') }}"
               class="btn btn-primary">{{ __('Add New Location') }}</a>
        </div>

        @livewire('location-table') {{-- Your Livewire data table for locations --}}

    </div>
</x-layouts.app>
