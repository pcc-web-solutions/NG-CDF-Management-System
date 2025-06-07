<div class="space-y-4">
    <div class="flex justify-between items-center">
        <flux:input wire:model.debounce.300ms="search" placeholder="Search countries..." class="w-1/3" />
    </div>

    <flux:table>
        <flux:table.columns>
            <flux:table.column label="Country Name" />
            <flux:table.column label="Code" />
            <flux:table.column label="Name" />
            <flux:table.column label="Number" />
            <flux:table.column label="Capital" />
            <flux:table.column label="Governor" />
            <flux:table.column label="Actions" />
        </flux:table.columns>

        <flux:table.rows>
            @forelse ($counties as $county)
                <flux:table.row>
                    <flux:table.cell>{{ $county->country->name }}</flux:table.cell>
                    <flux:table.cell>{{ $county->code }}</flux:table.cell>
                    <flux:table.cell>{{ $county->name }}</flux:table.cell>
                    <flux:table.cell>{{ $county->county_number }}</flux:table.cell>
                    <flux:table.cell>{{ $county->capital }}</flux:table.cell>
                    <flux:table.cell>{{ $county->governor }}</flux:table.cell>
                    <flux:table.cell>
                        <a href="{{ route('counties.edit', $county) }}" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                        <a href="#" class="text-green-600 hover:underline">Manage</a>
                    </flux:table.cell>
                </flux:table.row>
            @empty
                <flux:table.row>
                    <flux:table.cell :colspan="7" class="text-center">No counties found.</flux:table.cell>
                </flux:table.row>
            @endforelse
        </flux:table.rows>
    </flux:table>

    <div>
        {{ $counties->links() }}
    </div>
</div>
