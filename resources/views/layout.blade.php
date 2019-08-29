<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'laracasts')
        </title>
    </head>
    <body>
        <h1>   
            @yield('header')
        </h1>
        <ul>
            <li><a href="/">Home</li>
            <li><a href="about">About Us</li>
            <li><a href="contact">contact</li>
        </ul>
       @yield('content')
    </body>
</html>