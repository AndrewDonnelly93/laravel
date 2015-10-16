<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>@yield('title')</title>
    <link href="../assets/sass/app.css" media="screen" rel="stylesheet">
    <link href="../assets/sass/normalize.css" media="screen" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:700,400,300&subset=latin,cyrillic-ext,latin-ext,cyrillic"
          rel="stylesheet"
          type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic-ext,latin-ext,cyrillic"
          rel="stylesheet"
          type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
@yield('error')
<header>
<div class="layout-center-wrapper">
@yield('page-title')
@yield('auth-section')
</div>
</header>
<section class="content">
<div class="layout-center-wrapper">
@yield('content')
</div>
</section>
<footer>
<h2>2015 &copy; All rights reserved</h2>
</footer>
@yield('popup')
<script src="../assets/javascripts/main.js"></script>
</body>
</html>