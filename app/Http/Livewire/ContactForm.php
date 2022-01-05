<?php

namespace App\Http\Livewire;

use App\Rules\MaxWordsRule;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Redirector;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $content = '';

    protected function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'content' => ['required','string', new MaxWordsRule(150)],
        ];
    }

    public function submit(): Redirector
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        // Normally save to DB or send email etc.
        Log::info(sprintf("name: %s, email: %s, content: %s", $this->name, $this->email, $this->content));

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return redirect()->route('contact-form-success');
    }


    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function render(): \Illuminate\Contracts\Support\Renderable
    {
        return view('livewire.contact-form');
    }
}
