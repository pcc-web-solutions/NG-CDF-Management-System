<x-layouts.app.sidebar :title="__('Countries')">
    <flux:main>
        <div
        x-data="{ loading: true }"
        x-init="setTimeout(() => loading = false, 500)"
        class="bg-white rounded-xl shadow-md p-3 min-h-[300px] flex items-center justify-center text-gray-500 text-sm"
        >
            <template x-if="loading">
                <div class="animate-pulse">
                    Loading countries...
                </div>
            </template>

            <template x-if="!loading">
                <div class="w-full h-full">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-bold">Countries</h1>
                        <a href="{{ route('countries.create') }}" class="btn btn-red">Add New Country</a>
                    </div>

                    @livewire('country-table')
                </div>
            </template>
        </div>
    </flux:main>
</x-layouts.app.sidebar>