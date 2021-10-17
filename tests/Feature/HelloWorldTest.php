<?php

namespace Tests\Feature;

use App\Http\Livewire\HelloWorld;
use Livewire\Livewire;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    public function testCanSeeHelloWorld(): void
    {
        Livewire::test(HelloWorld::class)
            ->assertSee('Hello World')
            ->set(['message' => 'Hello, World!'])
            ->assertSee('Hello, World!');
    }
}
