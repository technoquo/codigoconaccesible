<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Brindo soluciones de la tecnología web y accesibilidad en la información para para todos." />
    <meta name="keywords" content="Laravel, Accesibilidad, Freelance" />
    <meta name="author" content="Leonel López Borbón" />
    <meta name="copyright" content="Propietario del Código Accesible con Leo" />
    <meta name="robots" content="follow" />
    <meta http-equiv="cache-control" content="no-cache" />

    <meta property="og:description"
        content="Brindo soluciones de la tecnología web y accesibilidad en la información para para todos.">
    <meta property="og:title" content="Código accesible con Leo" />
    <meta property="og:image" content="https://codigoaccesibleconleo.com/img/leo.jpeg" />
    <meta property="og:image:width" content="654" />
    <meta property="og:image:height" content="445" />
    <meta property="og:url" content="https://codigoaccesibleconleo.com/" />
    <meta property="og:type" content="website" />
    <meta property="twitter:card" content="Código Accesible con Leo">
    <meta property="twitter:title" content="Código Accesible con Leo">
    <meta property="twitter:description"
        content="Brindo soluciones de la tecnología web y accesibilidad en la información para para todos.">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon-96x96.png" />
    <title inertia>Código accesibe con Leo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4HSPERD24E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4HSPERD24E');
    </script>
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
