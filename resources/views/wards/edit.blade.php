<x-layouts.app.sidebar :title="__('Edit Ward')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Ward</h1>
            @livewire('ward-form', ['ward' => $ward])
        </div>
    </flux:main>
</x-layouts.app.sidebar>