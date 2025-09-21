<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DropdownProfile extends Component
{
    public $open = false;

    public function toggleDropdown()
    {
        $this->open = !$this->open;
    }

    public function closeDropdown()
    {
        $this->open = false;
    }

    public function logout()
    {
        \Auth::guard('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function render()
    {
        return view('livewire.dropdown-profile');
    }
}
