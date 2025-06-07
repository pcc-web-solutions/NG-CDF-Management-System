<x-layouts.app.sidebar>
    <flux:main title="Dashboard">
        {{-- LIVE PROJECT CHART OR INFO --}}
        <div
        x-data="{ loading: true }"
        x-init="setTimeout(() => loading = false, 1000)"
        class="bg-white rounded-xl shadow-md p-3 min-h-[300px] flex items-center justify-center text-gray-500 text-sm"
        >
            <template x-if="loading">
                <div class="animate-pulse">
                    Loading project summary...
                </div>
            </template>

            <template x-if="!loading">
                <div class="w-full h-full text-center">
                    @livewire('dashboard-stats') {{-- Replace this with your actual component --}}
                </div>
            </template>
        </div>
    </flux:main>
</x-layouts.app.sidebar>