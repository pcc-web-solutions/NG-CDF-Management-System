<div class="space-y-4">

    <div>
        <label for="country" class="block font-semibold">Country</label>
        <select wire:model="selectedCountry" id="country" class="w-full border rounded px-2 py-1">
            <option value="">-- Select Country --</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>

    @if ($counties)
    <div>
        <label for="county" class="block font-semibold">County</label>
        <select wire:model="selectedCounty" id="county" class="w-full border rounded px-2 py-1">
            <option value="">-- Select County --</option>
            @foreach ($counties as $county)
                <option value="{{ $county->id }}">{{ $county->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if ($subCounties)
    <div>
        <label for="subCounty" class="block font-semibold">Sub County</label>
        <select wire:model="selectedSubCounty" id="subCounty" class="w-full border rounded px-2 py-1">
            <option value="">-- Select Sub County --</option>
            @foreach ($subCounties as $subCounty)
                <option value="{{ $subCounty->id }}">{{ $subCounty->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if ($wards)
    <div>
        <label for="ward" class="block font-semibold">Ward</label>
        <select wire:model="selectedWard" id="ward" class="w-full border rounded px-2 py-1">
            <option value="">-- Select Ward --</option>
            @foreach ($wards as $ward)
                <option value="{{ $ward->id }}">{{ $ward->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if ($locations)
    <div>
        <label for="location" class="block font-semibold">Location</label>
        <select wire:model="selectedLocation" id="location" class="w-full border rounded px-2 py-1">
            <option value="">-- Select Location --</option>
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if ($subLocations)
    <div>
        <label for="subLocation" class="block font-semibold">Sub Location</label>
        <select wire:model="selectedSubLocation" id="subLocation" class="w-full border rounded px-2 py-1">
            <option value="">-- Select Sub Location --</option>
            @foreach ($subLocations as $subLocation)
                <option value="{{ $subLocation->id }}">{{ $subLocation->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if ($villages)
    <div>
        <label for="village" class="block font-semibold">Village</label>
        <select wire:model="selectedVillage" id="village" class="w-full border rounded px-2 py-1">
            <option value="">-- Select Village --</option>
            @foreach ($villages as $village)
                <option value="{{ $village->id }}">{{ $village->name }}</option>
            @endforeach
        </select>
    </div>
    @endif

</div>