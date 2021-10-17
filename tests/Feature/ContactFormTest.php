<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function testAMessageCanBeSuccessfullySubmitted(): void
    {
        Livewire::test(ContactForm::class)
            ->set(
                [
                    'name' => 'Fred',
                    'email' => 'Fred@example.com',
                    'content' => "Fred's message",
                ]
            )
            ->assertSee('Fred')
            ->assertSee('Fred@example.com')
            ->assertSee("Fred's message")
            ->call('submit')
            ->assertRedirect(route('contact-form-success'));
    }

    public function testAMessageMustContainAName(): void
    {
        Livewire::test(ContactForm::class)
            ->set(
                [
                    'name' => '',
                    'email' => 'Fred@example.com',
                    'content' => "Fred's message",
                ]
            )
            ->assertSee('Fred@example.com')
            ->assertSee("Fred's message")
            ->call('submit')
            ->assertSee("The name field is required.");
    }
    public function testAMessageMustContainAnEmail(): void
    {
        Livewire::test(ContactForm::class)
            ->set(
                [
                    'name' => 'Fred Bloggs',
                    'email' => '',
                    'content' => "Fred's message",
                ]
            )
            ->assertSee('Fred Bloggs')
            ->assertSee("Fred's message")
            ->call('submit')
            ->assertSee("The email field is required.");
    }

    public function testAMessageMustContainContent(): void
    {
        Livewire::test(ContactForm::class)
            ->set(
                [
                    'name' => 'Fred Bloggs',
                    'email' => 'Fred@example.com',
                    'content' => "",
                ]
            )
            ->assertSee('Fred Bloggs')
            ->assertSee("Fred@example.com")
            ->call('submit')
            ->assertSee("The content field is required.");
    }
}
