<x-layouts.app :title="__('Villages')">
    <div class="flex flex-col gap-4 rounded-xl p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">{{ __('Villages') }}</h1>
            <a href="{{ route('villages.create') }}"
               class="btn-primary">{{ __('Add New Village') }}</a>
        </div>

        @livewire('village-table') {{-- Your Livewire data table for villages --}}

    </div>
</x-layouts.app>
