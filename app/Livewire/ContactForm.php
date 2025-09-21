<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;

class ContactForm extends Component
{
    public $name, $email, $phone, $subject, $message;
    public $success = false;
    public $showForm = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20|regex:/^[\+]?[0-9\-\(\)\s]+$/',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|min:10',
    ];

    protected $messages = [
        'phone.regex' => 'Please enter a valid phone number.',
        'message.min' => 'Please provide a message with at least 10 characters.',
    ];

    public function submit()
    {
        $this->validate();
        $contact = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        
        Mail::to($this->email)->send(new ContactConfirmation($contact));
        Mail::to('contact@techstop.pro')->send(new ContactNotification($contact));
        
        $this->success = true;
        $this->showForm = false;
        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
        $this->dispatch('contactSubmitted');
        $this->dispatch('scroll-to-success');
    }

    public function sendAnother()
    {
        $this->success = false;
        $this->showForm = true;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
