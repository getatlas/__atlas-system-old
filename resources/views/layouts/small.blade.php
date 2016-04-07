<!doctype html>
<html>
    <head>

        <title>
            @has('title')
                @yield('title') | Atlas
            @else
                Atlas
            @endif
        </title>

        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width" />

        <link rel="apple-touch-icon" sizes="57x57" href="{{ elixir('favicon/apple-touch-icon-57x57.png') }}" />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ elixir('favicon/apple-touch-icon-60x60.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ elixir('favicon/apple-touch-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ elixir('favicon/apple-touch-icon-76x76.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ elixir('favicon/apple-touch-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ elixir('favicon/apple-touch-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ elixir('favicon/apple-touch-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ elixir('favicon/apple-touch-icon-152x152.png') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ elixir('favicon/apple-touch-icon-180x180.png') }}" />

        <link rel="icon" type="image/png" href="{{ elixir('favicon/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ elixir('favicon/android-chrome-192x192.png') }}" sizes="192x192" />
        <link rel="icon" type="image/png" href="{{ elixir('favicon/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/png" href="{{ elixir('favicon/favicon-16x16.png') }}" sizes="16x16" />
        <link rel="manifest" href="{{ elixir('favicon/manifest.json') }}" />
        <link rel="mask-icon" href="{{ elixir('favicon/safari-pinned-tab.svg') }}" color="#5bbad5" />
        <link rel="shortcut icon" href="{{ elixir('favicon/favicon.ico') }}" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="msapplication-TileImage" content="{{ elixir('favicon/mstile-144x144.png') }}" />
        <meta name="msapplication-config" content="{{ elixir('favicon/browserconfig.xml') }}" />
        <meta name="theme-color" content="#ffffff" />

        <meta name="description" content="" /> <!-- TODO: Add a description at some point -->

        <link rel="stylesheet" href="{{ elixir('css/style.css') }}" />
    </head>
    <body class="color-bg-dark">
        @yield('content')
    </body>
</html>