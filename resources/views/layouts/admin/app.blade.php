<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin.head />
    <body>
        <div id="app">
            <x-admin.navbar />

            <main class="py-4">@yield('content')</main>
        </div>
        <!--jQuery CDN-->
        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"
        ></script>
    </body>
</html>
