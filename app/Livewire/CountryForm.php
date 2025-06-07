<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;

class CountryForm extends Component
{
    public $country;
    public $name;
    public $code;
    public $iso_alpha3;
    public $currency;
    public $timezone;

    protected $rules = [
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:3',
        'iso_alpha3' => 'nullable|string|max:3',
        'currency' => 'nullable|string|max:10',
        'timezone' => 'nullable|string|max:255',
    ];

    public function mount(Country $country)
    {
        $this->country = $country;
        $this->name = $country?->name;
        $this->code = $country?->code;
        $this->iso_alpha3 = $country?->iso_alpha3;
        $this->currency = $country?->currency;
        $this->timezone = $country?->timezone;
    }

    public function save()
    {
        $this->validate();

        Country::updateOrCreate(
            ['id' => $this->country?->id],
            [
                'name' => $this->name,
                'code' => $this->code,
                'iso_alpha3' => $this->iso_alpha3,
                'currency' => $this->currency,
                'timezone' => $this->timezone
            ]
        );

        session()->flash('success', 'Country saved successfully.');

        return redirect()->route('countries.index');
    }

    public function render()
    {
        return view('livewire.country-form');
    }
}
