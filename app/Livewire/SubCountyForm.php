<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SubCounty;

class SubCountyForm extends Component
{
    public $sub_county;
    public $county_id;
    public $name;
    public $code;
    public $sub_county_office;

    protected $rules = [
        'county_id' => 'required|int',
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:255',
        'sub_county_office' => 'required|string|max:255'
    ];

    public function mount(SubCounty $sub_county)
    {
        $this->sub_county = $sub_county;
        $this->county_id = $sub_county?->county_id;
        $this->name = $sub_county?->name;
        $this->code = $sub_county?->code;
        $this->sub_county_office = $sub_county?->sub_county_office;
    }

    public function save()
    {
        $this->validate();

        SubCounty::updateOrCreate(
            ['id' => $this->sub_county?->id],
            [
                'county_id' => $this->county_id,
                'name' => $this->name,
                'code' => $this->code,
                'sub_county_office' => $this->sub_county_office
            ]
        );

        session()->flash('success', 'Sub-County saved successfully.');

        return redirect()->route('sub-counties.index');
    }

    public function render()
    {
        return view('livewire.sub-county-form');
    }
}
