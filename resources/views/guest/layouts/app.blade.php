<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">

    <title>@yield('page_title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;600&display=swap"
        rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Manjari|Roboto|Work+Sans&display=swap" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> --}}
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />

</head>

<body>
    {{-- <header>
       
    </header> --}}

    <main>

        @yield('content')
        @include('guest.layouts.about-us')
    </main>

    <footer>
        @include('guest.layouts.footer')
    </footer>

    <script>
        M.AutoInit();
    </script>

</body>

</html>
