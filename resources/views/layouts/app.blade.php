<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'TESDA NIR')</title>


    <!-- Favicon -->
    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('favicon.ico') }}"
    >

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('images/favicon-32x32.png') }}"
    >

    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('images/favicon-16x16.png') }}"
    >


    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Frutiger Font -->
    <style>

        @font-face {
            font-family: 'Frutiger';
            src: url('{{ asset('fonts/Frutiger.ttf') }}') format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Frutiger';
            src: url('{{ asset('fonts/Frutiger_bold.ttf') }}') format('truetype');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }


        * {
            font-family: 'Frutiger', sans-serif;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            margin: 0;
            font-family: 'Frutiger', sans-serif;
        }

    </style>


    @stack('styles')

</head>

<body>

    @yield('content')

    @stack('scripts')

</body>

</html>