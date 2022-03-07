<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">

    <link rel="canonical" href="@yield('canonical_url')" />

    <title>@yield('page_title')</title>
    <!-- <title>Auto Mata 3D - Web 3 Development Website for Advanced Technology | Blockchain Development</title> -->

    <meta property="og:type" content="business.business">
    <meta property="og:title" content="Auto Mata 3D - Web 3 Development Website for Advanced Technology | Blockchain Development">
    <meta property="og:url" content="https://automata3d.com/">
    <meta property="og:image" content="https://automata3d.com/images/logo.png">
    <meta property="og:description" content="Web 3 development website with a programming language and other latest technologies, we develop scalable, intelligent, stand-alone, and technologically advanced applications.">
    <meta property="business:contact_data:street_address" content="5011 Gate Pkwy 100-100, Jacksonville">
    <meta property="business:contact_data:locality" content="Jacksonville">
    <meta property="business:contact_data:region" content="FL">
    <meta property="business:contact_data:postal_code" content="32256">
    <meta property="business:contact_data:country_name" content="United States">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Auto Mata 3D - Web 3 Development Website for Advanced Technology | Blockchain Development">
    <meta name="twitter:site" content="">
    <meta name="twitter:description" content="Web 3 development website with a programming language and other latest technologies, we develop scalable, intelligent, stand-alone, and technologically advanced applications.">
    <meta name="twitter:image" content="https://automata3d.com/images/logo.png">
    <meta name="twitter:image:alt" content="Auto Mata 3D">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "Auto Mata 3D",
      "url": "https://automata3d.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>




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

    <link rel="stylesheet" type="text/css" href="{{ url('/css/dev-test.css') }}" />

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
