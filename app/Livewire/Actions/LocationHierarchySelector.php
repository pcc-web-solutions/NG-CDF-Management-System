<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\County;
use App\Models\SubCounty;
use App\Models\Ward;
use App\Models\Location;
use App\Models\SubLocation;
use App\Models\Village;

class LocationHierarchySelector extends Component
{
    public $countries;
    public $counties = [];
    public $subCounties = [];
    public $wards = [];
    public $locations = [];
    public $subLocations = [];
    public $villages = [];

    public $selectedCountry = null;
    public $selectedCounty = null;
    public $selectedSubCounty = null;
    public $selectedWard = null;
    public $selectedLocation = null;
    public $selectedSubLocation = null;
    public $selectedVillage = null;

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updatedSelectedCountry($countryId)
    {
        $this->counties = County::where('country_id', $countryId)->get();
        $this->resetFrom('selectedCounty');
    }

    public function updatedSelectedCounty($countyId)
    {
        $this->subCounties = SubCounty::where('county_id', $countyId)->get();
        $this->resetFrom('selectedSubCounty');
    }

    public function updatedSelectedSubCounty($subCountyId)
    {
        $this->wards = Ward::where('sub_county_id', $subCountyId)->get();
        $this->resetFrom('selectedWard');
    }

    public function updatedSelectedWard($wardId)
    {
        $this->locations = Location::where('ward_id', $wardId)->get();
        $this->resetFrom('selectedLocation');
    }

    public function updatedSelectedLocation($locationId)
    {
        $this->subLocations = SubLocation::where('location_id', $locationId)->get();
        $this->resetFrom('selectedSubLocation');
    }

    public function updatedSelectedSubLocation($subLocationId)
    {
        $this->villages = Village::where('sub_location_id', $subLocationId)->get();
        $this->resetFrom('selectedVillage');
    }

    private function resetFrom($property)
    {
        switch ($property) {
            case 'selectedCounty':
                $this->selectedCounty = null;
                $this->selectedSubCounty = null;
                $this->selectedWard = null;
                $this->selectedLocation = null;
                $this->selectedSubLocation = null;
                $this->selectedVillage = null;
                $this->counties = [];
                $this->subCounties = [];
                $this->wards = [];
                $this->locations = [];
                $this->subLocations = [];
                $this->villages = [];
                break;
            case 'selectedSubCounty':
                $this->selectedSubCounty = null;
                $this->selectedWard = null;
                $this->selectedLocation = null;
                $this->selectedSubLocation = null;
                $this->selectedVillage = null;
                $this->subCounties = [];
                $this->wards = [];
                $this->locations = [];
                $this->subLocations = [];
                $this->villages = [];
                break;
            case 'selectedWard':
                $this->selectedWard = null;
                $this->selectedLocation = null;
                $this->selectedSubLocation = null;
                $this->selectedVillage = null;
                $this->wards = [];
                $this->locations = [];
                $this->subLocations = [];
                $this->villages = [];
                break;
            case 'selectedLocation':
                $this->selectedLocation = null;
                $this->selectedSubLocation = null;
                $this->selectedVillage = null;
                $this->locations = [];
                $this->subLocations = [];
                $this->villages = [];
                break;
            case 'selectedSubLocation':
                $this->selectedSubLocation = null;
                $this->selectedVillage = null;
                $this->subLocations = [];
                $this->villages = [];
                break;
            case 'selectedVillage':
                $this->selectedVillage = null;
                $this->villages = [];
                break;
        }
    }

    public function render()
    {
        return view('livewire.kenya-hierarchy-selector');
    }
}