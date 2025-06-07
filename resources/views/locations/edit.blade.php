<x-layouts.app.sidebar :title="__('Edit Location')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Location</h1>
            @livewire('location-form', ['location' => $location])
        </div>
    </flux:main>
</x-layouts.app.sidebar>