<div class="space-y-4">
    <div class="flex justify-between items-center">
        <flux:input wire:model.debounce.300ms="search" placeholder="Search sub-counties..." class="w-1/3" />
    </div>

    <flux:table>
        <flux:table.columns>
            <flux:table.column label="County Name" />
            <flux:table.column label="Sub-County Code" />
            <flux:table.column label="Sub-County Name" />
            <flux:table.column label="Sub-County Office" />
            <flux:table.column label="Actions" />
        </flux:table.columns>

        <flux:table.rows>
            @forelse ($sub_counties as $sub_county)
                <flux:table.row>
                    <flux:table.cell>{{ $sub_county->county->code." - ".$sub_county->county->name }}</flux:table.cell>
                    <flux:table.cell>{{ $sub_county->name }}</flux:table.cell>
                    <flux:table.cell>{{ $sub_county->code }}</flux:table.cell>
                    <flux:table.cell>{{ $sub_county->sub_county_office }}</flux:table.cell>
                    <flux:table.cell>
                        <a href="{{ route('sub-counties.edit', $sub_county) }}" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                        <a href="#" class="text-green-600 hover:underline">Manage</a>
                    </flux:table.cell>
                </flux:table.row>
            @empty
                <flux:table.row>
                    <flux:table.cell :colspan="5" class="text-center">No sub-counties found.</flux:table.cell>
                </flux:table.row>
            @endforelse
        </flux:table.rows>
    </flux:table>

    <div>
        {{ $sub_counties->links() }}
    </div>
</div>
