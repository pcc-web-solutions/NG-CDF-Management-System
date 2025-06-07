<x-layouts.app.sidebar :title="__('Edit County')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Country</h1>
            @livewire('county-form', ['county' => $county])
        </div>
    </flux:main>
</x-layouts.app.sidebar>