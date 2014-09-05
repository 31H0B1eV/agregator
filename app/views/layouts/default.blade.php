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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Bootcards CSS for iOS: -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootcards/0.1.0/css/bootcards-ios.min.css">

    <!-- Bootcards CSS for Android: -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootcards/0.1.0/css/bootcards-android.min.css">

    <!-- Bootcards CSS for desktop: -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootcards/0.1.0/css/bootcards-desktop.min.css">
    <link href="/css/main.css" rel="stylesheet" media="screen">
</head>

<body>

@include('layouts.partials.nav')

        @yield('content')

    <!-- Angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.20/angular.min.js"></script>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap and Bootcards JS -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootcards/0.1.0/js/bootcards.min.js"></script>
    <!-- custom js -->
    <script src="/js/main.js"></script>
</body>

</html>
