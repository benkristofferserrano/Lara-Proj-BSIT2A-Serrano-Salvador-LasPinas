<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben & Bean Cafe</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:#FFF8F0;
            color:#333;
        }

        nav{
            background:#6F4E37;
            padding:15px 10%;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            color:white;
            font-size:24px;
            font-weight:bold;
        }

        nav ul{
            display:flex;
            list-style:none;
            gap:20px;
        }

        nav a{
            color:white;
            text-decoration:none;
        }

        footer{
            background:#6F4E37;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }

        .container{
            min-height:80vh;
        }

        .dark{
            background:#121212;
            color:white;
        }
    </style>

    @stack('styles')
</head>
<body>

<nav>
    <div class="logo">☕ Ben & Bean Cafe</div>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>Ben & Bean Cafe © 2026</p>
    <p>Serrano | Salvador | Las Pinas</p>
</footer>

@stack('scripts')

</body>
</html>