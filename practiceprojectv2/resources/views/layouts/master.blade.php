<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/11/2021
 * Time: 1:54 PM
 */
?>
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Customers Project | @yield('title')</title>
</head>
<body>
<section class="content">
    <div class="container">
        @yield('content')
    </div>
</section>
<footer class="footer-bg">
    <div class="container">
        <a class="btn" href="{{route('welcome')}}">Terug naar overzicht</a>
        <p class="footer_text">@Camiel Groenendijk</p>
    </div>
</footer>

</body>
</html>
