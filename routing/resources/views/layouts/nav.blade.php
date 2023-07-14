<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background: #272727;
            font-family: "Montserrat", sans-serif;
        }

        .navMenu {
            position: absolute;
            top: 10%;
            left: 20%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .navMenu a {
            color: #f6f4e6;
            text-decoration: none;
            font-size: 1.2em;
            text-transform: uppercase;
            font-weight: 500;
            display: inline-block;
            width: 80px;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .navMenu a:hover {
            color: #fddb3a;
        }

        .navMenu .dot {
            width: 6px;
            height: 6px;
            background: #fddb3a;
            border-radius: 50%;
            opacity: 0;
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .navMenu a:nth-child(1):hover ~ .dot {
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .navMenu a:nth-child(2):hover ~ .dot {
            -webkit-transform: translateX(110px);
            transform: translateX(110px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .navMenu a:nth-child(3):hover ~ .dot {
            -webkit-transform: translateX(200px);
            transform: translateX(200px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }

        .navMenu a:nth-child(4):hover ~ .dot {
            -webkit-transform: translateX(285px);
            transform: translateX(285px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
        }
        .con
        {
            color: white;
        }

    </style>
</head>
<body>
<nav class="navMenu">
    <a href="/">Home</a>
    <a href="users">Users</a>
    <a href="posts">Posts</a>
{{--    <a href="#">About</a>--}}
    <div class="dot"></div>


    <div class="con">
        @yield('cont')
        <br>
        @section('leo')
           Nav --------
        @show
    </div>
</nav>
</body>
</html>
