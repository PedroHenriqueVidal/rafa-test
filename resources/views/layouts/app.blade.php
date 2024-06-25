<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookLive  - @yield('title') </title>


    @vite('public/src/js/app.js')

</head>
<body>

    <header>
        @include('includes.header')
    </header>
    
    <section>
        @yield('content')
    </section>

    <footer>
        @include('includes.footer')
    </footer>

</body>
</html>