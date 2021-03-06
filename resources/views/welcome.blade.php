<x-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <!-- main body of the page -->
    <h1>Welcome</h1>

    <p>Please see below a list of Livewire components from the <a href="https://laravel-livewire.com/docs/2.x/quickstart">Livewire documentation</a></p>
    <ul>
        <li><a href="{{ route("counter") }}">Counter</a></li>
        <li><a href="{{ route("hello-world") }}">Hello world</a></li>
        <li><a href="{{ route("contact-form") }}">Contact form</a></li>
    </ul>

</x-layout>

