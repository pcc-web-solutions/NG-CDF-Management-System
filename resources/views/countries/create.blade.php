<x-layouts.app.sidebar :title="__('Add Country')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Add Country</h1>
            @livewire('country-form')
        </div>
    </flux:main>
</x-layouts.app.sidebar>