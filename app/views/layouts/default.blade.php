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
    <script>
        $(".thumbnail").height(Math.max.apply(null, $(".thumbnail").map(function() { return 350; })));
    </script>
</body>

</html>
