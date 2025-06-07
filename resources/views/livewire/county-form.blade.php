<form wire:submit.prevent="save" class="space-y-6">
    <x-form.floating-select
        id="country_id"
        label="Country Name"
        model="country_id"
        :options="[
            '' => '-- select --',
            1 => 'Kenya'
        ]"
        icon='<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>'
    />

    <x-form.floating-input
        id="code"
        label="County Code"
        model="code"
        icon='<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 12h6m-6 7h6"/></svg>'
    />

    <x-form.floating-input
        id="name"
        label="County Name"
        model="name"
        icon='<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 12h6m-6 7h6"/></svg>'
    />

    <x-form.floating-input
        id="county_number"
        label="County Number"
        model="county_number"
        icon='<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 12h6m-6 7h6"/></svg>'
    />

    <x-form.floating-input
        id="capital"
        label="Capital City"
        model="capital"
        icon='<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 12h6m-6 7h6"/></svg>'
    />

    <x-form.floating-input
        id="governor"
        label="Governor Name"
        model="governor"
        icon='<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5h6M9 12h6m-6 7h6"/></svg>'
    />

    <div class="text-right">
        <button type="submit"
                class="inline-flex items-center px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            Save
        </button>
    </div>
</form>