<div class="space-y-4">
    <div class="flex justify-between items-center">
        <flux:input wire:model.debounce.300ms="search" placeholder="Search countries..." class="w-1/3" />
    </div>

    <flux:table>
        <flux:table.columns>
            <flux:table.column label="Name" />
            <flux:table.column label="Code" />
            <flux:table.column label="Iso Alpha3" />
            <flux:table.column label="Currency" />
            <flux:table.column label="Timezone" />
            <flux:table.column label="Actions" />
        </flux:table.columns>

        <flux:table.rows>
            @forelse ($countries as $country)
                <flux:table.row>
                    <flux:table.cell>{{ $country->name }}</flux:table.cell>
                    <flux:table.cell>{{ $country->code }}</flux:table.cell>
                    <flux:table.cell>{{ $country->iso_alpha3 }}</flux:table.cell>
                    <flux:table.cell>{{ $country->currency }}</flux:table.cell>
                    <flux:table.cell>{{ $country->timezone }}</flux:table.cell>
                    <flux:table.cell>
                        <a href="{{ route('countries.edit', $country) }}" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                        <a href="#" class="text-green-600 hover:underline">Manage</a>
                    </flux:table.cell>
                </flux:table.row>
            @empty
                <flux:table.row>
                    <flux:table.cell :colspan="8" class="text-center">No countries found.</flux:table.cell>
                </flux:table.row>
            @endforelse
        </flux:table.rows>
    </flux:table>

    <div>
        {{ $countries->links() }}
    </div>
</div>
