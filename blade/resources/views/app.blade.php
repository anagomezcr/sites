<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                background: black;
            }
            p {
                color: white;
            }
            .bg-light {
                width: 100%;
                position:fixed;
                left:0px;
                bottom:0px;
                height: 60px;
            }
            .text-center {
                width: 100%;
                background-color: rgba(0, 0, 0, 0.2);
                height: 60px;
                padding-top: 20px;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                background-color: #f1f1f1;
                display: flex;
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

                /* Change the link color on hover */
            li a:hover {
                background-color: #555;
                color: white;
            }
            .active {
                background-color: #04AA6D;
                color: white;
            }
        </style>
    </head>
    <body>
        @include('header')

        @yield('content')
        
        @include('footer')
    </body>
</html>