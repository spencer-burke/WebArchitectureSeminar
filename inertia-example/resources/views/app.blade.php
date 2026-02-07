<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inertia App</title>
        @viteReactRefresh
        @vite('resources/js/app.jsx')
        @inertiaHead
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
        >
    </head>
    <body>
        @inertia
    </body>
</html>
