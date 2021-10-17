<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $message = 'Hello World!';

    public function render()
    {
        return view('livewire.hello-world')
            ->extends('layouts.base')
            ->section('body');
    }
}
