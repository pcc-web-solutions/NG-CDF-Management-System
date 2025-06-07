<x-layouts.app.sidebar :title="__('Edit Village')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Village</h1>
            @livewire('village-form', ['village' => $village])
        </div>
    </flux:main>
</x-layouts.app.sidebar>