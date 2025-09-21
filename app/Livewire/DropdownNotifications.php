<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Contact;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class DropdownNotifications extends Component
{
    public $open = false;
    public $unreadCount = 0;
    public $latestContacts = [];
    public $lastUpdated;
    public $isLoading = false;

    protected $listeners = [
        'contactSubmitted' => 'handleNewContact',
        'messageRead' => 'handleMessageRead'
    ];

    public function mount()
    {
        $this->loadNotifications();
        $this->lastUpdated = now();
    }

    public function loadNotifications()
    {
        try {
            $this->isLoading = true;
            
            // Cache notifications for 30 seconds to reduce database queries
            $cacheKey = 'notifications_data';
            $data = Cache::remember($cacheKey, 30, function () {
                return [
                    'unreadCount' => Contact::where('is_read', false)->count(),
                    'latestContacts' => Contact::with([])
                        ->latest()
                        ->take(4)
                        ->get(['id', 'name', 'subject', 'created_at', 'is_read'])
                        ->toArray()
                ];
            });
            
            $this->unreadCount = $data['unreadCount'];
            $this->latestContacts = $data['latestContacts'];
            $this->lastUpdated = now();
            
        } catch (\Exception $e) {
            \Log::error('Failed to load notifications: ' . $e->getMessage());
            $this->unreadCount = 0;
            $this->latestContacts = [];
        } finally {
            $this->isLoading = false;
        }
    }

    #[On('contactSubmitted')]
    public function handleNewContact()
    {
        $this->clearCache();
        $this->loadNotifications();
        $this->dispatch('notification-updated');
    }

    #[On('messageRead')]
    public function handleMessageRead($contactId = null)
    {
        $this->clearCache();
        $this->loadNotifications();
    }

    public function toggleDropdown()
    {
        $this->open = !$this->open;
        
        if ($this->open) {
            // Refresh data when opening dropdown
            $this->refreshIfStale();
        }
    }

    public function closeDropdown()
    {
        $this->open = false;
    }

    public function markAllAsRead()
    {
        try {
            Contact::where('is_read', false)->update(['is_read' => true]);
            $this->clearCache();
            $this->loadNotifications();
            $this->dispatch('notification-updated');
        } catch (\Exception $e) {
            \Log::error('Failed to mark all as read: ' . $e->getMessage());
        }
    }

    public function refreshNotifications()
    {
        $this->clearCache();
        $this->loadNotifications();
    }

    private function refreshIfStale()
    {
        // Refresh if data is older than 1 minute
        if ($this->lastUpdated && $this->lastUpdated->diffInMinutes(now()) > 1) {
            $this->refreshNotifications();
        }
    }

    private function clearCache()
    {
        Cache::forget('notifications_data');
    }

    public function getTimeAgoProperty()
    {
        return $this->lastUpdated ? $this->lastUpdated->diffForHumans() : null;
    }

    public function render()
    {
        return view('livewire.dropdown-notifications');
    }
}
