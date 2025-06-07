<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\County;

class CountyForm extends Component
{
    public $county;
    public $country_id;
    public $code;
    public $name;
    public $county_number;
    public $capital;
    public $governor;

    protected $rules = [
        'country_id' => 'required|int',
        'code' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'county_number' => 'required|int',
        'capital' => 'nullable|string|max:255',
        'governor' => 'nullable|string|max:255',
    ];

    public function mount(County $county)
    {
        $this->county = $county;
        $this->country_id = $county?->country_id;
        $this->code = $county?->code;
        $this->name = $county?->name;
        $this->county_number = $county?->county_number;
        $this->capital = $county?->capital;
        $this->governor = $county?->governor;
    }

    public function save()
    {
        $this->validate();

        County::updateOrCreate(
            ['id' => $this->county?->id],
            [
                'country_id' => $this->country_id,
                'code' => $this->code,
                'name' => $this->name,
                'county_number' => $this->county_number,
                'capital' => $this->capital,
                'governor' => $this->governor
            ]
        );

        session()->flash('success', 'County saved successfully.');

        return redirect()->route('counties.index');
    }

    public function render()
    {
        return view('livewire.county-form');
    }
}
