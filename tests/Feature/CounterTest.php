<?php

namespace Tests\Feature;

use App\Http\Livewire\Counter;
use Livewire\Livewire;
use Tests\TestCase;

class CounterTest extends TestCase
{
    public function testCanIncrementAndSetCounter(): void
    {
        Livewire::test(Counter::class)
            ->assertSee(0)
            ->call('increment')
            ->assertSee(1)
            ->call('increment')
            ->assertSee(2)
            ->set('count', 5)
            ->assertSee(5)
            ->set(['count' => 2])
            ->assertSee(2);
    }
}
