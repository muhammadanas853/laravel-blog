<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Theme</title>
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}">
</head>
<body class="dark-theme">
    @include('themes.dark.header')

    <main>
        @yield('content')
    </main>

    @include('themes.dark.footer')
</body>
</html>
