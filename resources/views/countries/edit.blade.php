<x-layouts.app.sidebar :title="__('Edit Country')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Country</h1>
            @livewire('country-form', ['country' => $country])
        </div>
    </flux:main>
</x-layouts.app.sidebar>