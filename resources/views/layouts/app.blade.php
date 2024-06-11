<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

    <header class="row">

    @include('includes.header')

    </header>
    
    <div id="main" class="row">

    @yield('content')

    </div>

    <footer class="row">

    @include('includes.footer')

    </footer>

</body>
</html>