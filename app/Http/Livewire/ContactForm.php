<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $content = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'content' => 'required|string|max:500',
    ];

    public function submit(): \Livewire\Redirector
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        // Normally save to DB or send email etc.
        Log::info('name: ' . $this->name . ', email: ' . $this->email . ', content: ' . $this->content);

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return redirect()->route('contact-form-success');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
