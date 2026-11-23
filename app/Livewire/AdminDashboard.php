<?php
namespace App\Livewire;

use App\Models\Machinery;
use App\Models\Inquiry;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $activeTab = 'machineries';

    public function render()
    {
        return view('livewire.admin-dashboard', [
            'machineries' => Machinery::latest()->get(),
            'inquiries' => Inquiry::latest()->get(),
        ])->layout('components.layouts.app'); // Uses your existing layout
    }
}
