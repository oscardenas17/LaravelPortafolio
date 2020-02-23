<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaravelApp')</title>
</head>
<body>
    <nav>
        <ul>
            <li> <a href="/">Home</a></li>
            <li> <a href="/about">About </a></li>
            <li> <a href="/portfolio">Portfolio </a></li>
            <li> <a href="/contact">Contacto </a></li>
        </ul>
       </nav>

        @yield('content')
  

</body>
</html>