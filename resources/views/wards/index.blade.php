<x-layouts.app :title="__('Wards')">
    <div class="flex flex-col gap-4 rounded-xl p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">{{ __('Wards') }}</h1>
            <a href="{{ route('wards.create') }}"
               class="btn-primary">{{ __('Add New Ward') }}</a>
        </div>

        @livewire('ward-table') {{-- Your Livewire data table for wards --}}

    </div>
</x-layouts.app>
