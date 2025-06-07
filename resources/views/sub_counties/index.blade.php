<x-layouts.app.sidebar :title="__('Sub-Counties')">
    <flux:main>
        <div
        x-data="{ loading: true }"
        x-init="setTimeout(() => loading = false, 500)"
        class="bg-white rounded-xl shadow-md p-3 min-h-[300px] flex items-center justify-center text-gray-500 text-sm"
        >
            <template x-if="loading">
                <div class="animate-pulse">
                    Loading sub-counties...
                </div>
            </template>

            <template x-if="!loading">
                <div class="w-full h-full">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-bold">Sub-Counties</h1>
                        <a href="{{ route('sub-counties.create') }}" class="btn btn-red">Add New Sub-County</a>
                    </div>

                    @livewire('sub-county-table')
                </div>
            </template>
        </div>
    </flux:main>
</x-layouts.app.sidebar>