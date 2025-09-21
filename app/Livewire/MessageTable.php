<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class MessageTable extends Component
{
    // Use the WithPagination trait to enable pagination
    use WithPagination;

    // Public properties to manage the modal state and content
    public $isModalOpen = false;
    public $modalMessage = '';

    // Method to open the modal and set the message
    public function viewMessage($contactId, $message)
    {
        $this->modalMessage = $message;
        $this->isModalOpen = true;
        
        // Mark message as read when viewed
        $contact = Contact::find($contactId);
        if ($contact && !$contact->is_read) {
            $contact->update(['is_read' => true]);
            $this->dispatch('messageRead', contactId: $contactId);
        }
    }

    // Method to close the modal
    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    // Method to toggle read/unread status
    public function toggleRead($contactId)
    {
        $contact = Contact::find($contactId);
        if ($contact) {
            $contact->update(['is_read' => !$contact->is_read]);
            $this->dispatch('messageRead', contactId: $contactId);
        }
    }

    // The render method now fetches and paginates the data
    public function render()
    {
        // Paginate the contacts instead of getting all of them at once
        $contacts = Contact::latest()->paginate(7); // You can choose your desired number per page

        return view('livewire.message-table', [
            'contacts' => $contacts
        ]);
    }
}