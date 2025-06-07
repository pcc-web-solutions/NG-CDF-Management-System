<x-layouts.app.sidebar :title="__('Counties')">
    <flux:main>
        <div
        x-data="{ loading: true }"
        x-init="setTimeout(() => loading = false, 500)"
        class="bg-white rounded-xl shadow-md p-3 min-h-[300px] flex items-center justify-center text-gray-500 text-sm"
        >
            <template x-if="loading">
                <div class="animate-pulse">
                    Loading counties...
                </div>
            </template>

            <template x-if="!loading">
                <div class="w-full h-full">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-bold">Counties</h1>
                        <a href="{{ route('counties.create') }}" class="btn btn-red">Add New County</a>
                    </div>

                    @livewire('county-table')
                </div>
            </template>
        </div>
    </flux:main>
</x-layouts.app.sidebar>
