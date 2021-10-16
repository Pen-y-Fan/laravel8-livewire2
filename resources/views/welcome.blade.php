<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The page supports both dark and light color schemes, and the page author prefers / default is light. -->
    <meta name="color-scheme" content="light dark">
    <!-- Bootstrap CSS nightshade theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-nightshade.min.css"
          rel="stylesheet">

    <!-- required stylesheet for Livewire -->
    @livewireStyles

    <!-- styles -->
    <style>

        /* Accessible link colour */
        html.dark a {
            color: #3A88FD;
        }
    </style>

    <title>Counter | Livewire 2 examples</title>

</head>
<body>
<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark mb-3">
    <div class="container-fluid d-flex align-items-center">
        <h1 class="d-flex align-items-center fs-4 text-white mb-0">Livewire 2 Examples</h1>
        <form class="ms-auto d-flex">
            <div class="form-check form-switch tooltip-demo">
                <input class="form-check-input" type="checkbox" id="toggle-btn" title="Toggle Dark Mode"
                       data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Toggle Dark Mode"
                       data-bs-original-title="" aria-label="Toggle Dark Mode">
                <label class="form-check-label" for="toggle-btn" aria-label="Toggle dark mode"></label>
            </div>
        </form>
    </div>
</header>
<main class="entry-content container mb-5">
    <!-- main body of the page -->
    <h2>Counter example</h2>
    <livewire:counter />
    <!-- or -->
{{--    @livewire('counter') --}}
</main>
<footer class="modal-footer mb-3 justify-content-between">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe"
             viewBox="0 0 16 16">
            <path
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
        </svg>
        <a href="https://pen-y-fan.github.io" target="_blank"> Pen-y-Fan</a>
    </div>
    <div>
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
            <img alt="Creative Commons Licence" style="border-width:0"
                 src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>
        </a> This work is licensed under a <a rel="license" target="_blank"
                                              href="http://creativecommons.org/licenses/by/4.0/">Creative
            Commons Attribution 4.0 International License</a>.
    </div>
    <div>
        Source: <a href="https://laravel-livewire.com/docs/2.x/quickstart/" target="_blank">Laravel Livewire</a>
    </div>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

<!-- Required DarkMode JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/js/darkmode.min.js"></script>

<!-- Toggle button for dark / light mode -->
<script>
    document.querySelector("#toggle-btn").onclick = function () {
        darkmode.toggleDarkMode();
    }
</script>

<!-- required Livewire script -->
@livewireScripts

</body>
</html>
