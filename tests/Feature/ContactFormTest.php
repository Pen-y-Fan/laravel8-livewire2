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

    public function testAMessageMustNotExceedOneHundredAndFiftyWords(): void
    {
        $words = <<<EOF
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum facilisis consectetur tellus, eu pretium arcu bibendum et. Nulla aliquam iaculis venenatis. Nam eget congue lorem, vel dictum dui. Vestibulum at diam volutpat, mattis nisl ac, fermentum mauris. In mollis massa eget nibh efficitur consectetur. Ut lectus velit, molestie non blandit sit amet, fermentum ac enim. In eros erat, feugiat eget ipsum sit amet, eleifend ultrices lorem. In in velit id mauris maximus fermentum. Ut placerat condimentum egestas. Vivamus ac orci sem. Curabitur vitae est eu est tempor commodo. Nulla eget urna lacinia, dictum libero vel, venenatis sapien.

Morbi est quam, scelerisque suscipit felis laoreet, congue interdum eros. Nulla et tortor eu ligula consectetur iaculis. Duis luctus nibh non urna sagittis maximus. Curabitur ut eros id est interdum consequat venenatis eget sapien. Aenean blandit arcu velit, ac vulputate risus imperdiet sagittis. Donec scelerisque posuere augue sit amet accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Quisque quis dolor non turpis ullamcorper pretium a vel orci. Sed rutrum sem non nibh consectetur, eu semper metus porta. Nullam finibus arcu feugiat accumsan blandit. Morbi dignissim magna ut fringilla egestas. Nam libero tellus, eleifend id sodales a, condimentum vel massa. Etiam a quam in metus feugiat aliquam a et leo. Mauris non blandit libero.
EOF;

        Livewire::test(ContactForm::class)
            ->set(
                [
                    'name' => 'Fred Bloggs',
                    'email' => 'Fred@example.com',
                    'content' => $words,
                ]
            )
            ->assertSee('Fred Bloggs')
            ->assertSee("Fred@example.com")
            ->assertSee("Lorem ipsum dolor sit amet")
            ->call('submit')
            ->assertSee("The current word count of 218 exceeds the maximum allowed of 150 words.");
    }
}
