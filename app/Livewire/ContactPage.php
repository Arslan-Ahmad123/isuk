<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function submit()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'userMessage' => $this->message,
        ];

        Mail::send('emails.contact', $data, function ($message) {
            $message->to('info@isukconsultancy.co.uk')
                    ->subject('New Contact Form Submission');
        });

        session()->flash('success', 'Your message has been sent successfully!');

        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}
