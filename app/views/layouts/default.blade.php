<!DOCTYPE html>
<html lang="ru" ng-app>

<head>
    <title>@yield('title')
    </title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-
scale=1">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/main.css" rel="stylesheet" media="screen">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- test -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:600px"
         data-ad-client="ca-pub-8991474059210216"
         data-ad-slot="9206148683"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</head>

<body>

@include('layouts.partials.nav')

        @yield('content')

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular.min.js"></script>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="/js/main.js"></script>
</body>

</html>
