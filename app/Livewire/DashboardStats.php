<?php
namespace App\Livewire;

use Livewire\Component;

class DashboardStats extends Component
{
    public $projects = 0;
    public $applications = 0;
    public $disbursed = 0;

    public function mount()
    {
        $this->loadStats();
    }

    public function loadStats()
    {
        // Dummy dynamic data (replace with actual model queries)
        $this->projects = rand(100, 300);
        $this->applications = rand(500, 1000);
        $this->disbursed = 'KSh ' . number_format(rand(1000000, 20000000));
    }

    public function render()
    {
        return view('livewire.dashboard-stats');
    }
}
