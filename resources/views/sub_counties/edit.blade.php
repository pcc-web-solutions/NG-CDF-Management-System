<x-layouts.app.sidebar :title="__('Edit Sub-County')">
    <flux:main>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-4">Edit Sub-County</h1>
            @livewire('sub-county-form', ['sub_county' => $sub_county])
        </div>
    </flux:main>
</x-layouts.app.sidebar>