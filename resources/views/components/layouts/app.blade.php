<x-layouts.app.sidebar :title="$title ?? config('app.name')">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
