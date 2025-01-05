<?php

namespace App\Livewire;

use App\Traits\PageTrait;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{
    use PageTrait;
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function render()
    {
        $pages = $this->allPages();
        return view('livewire.contact-page',[
            'contact' => $pages?->where('page_name', 'contact'),
            'headerFooter' => $pages?->where('page_name', 'header_footer')?->first(),
        ]);
    }

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
}
