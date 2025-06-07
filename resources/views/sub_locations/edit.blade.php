<x-layouts.app.sidebar :title="__('Edit Sub-Location')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Sub-Location</h1>
            @livewire('sub-location-form', ['sub_location' => $sub_location])
        </div>
    </flux:main>
</x-layouts.app.sidebar>