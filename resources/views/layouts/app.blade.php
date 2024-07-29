<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curlybraces - Agence de Transformation Digitale</title>
    <meta name="keywords" content="Curlybraces, transformation digitale, CBraces Global, agence digitale, services digitaux">
    <meta name="author" content="CBraces Global">
    <meta property="og:title" content="Curlybraces - Agence de Transformation Digitale" />
    <meta name="description" content="Agence d'accompagnement en transformation digitale de votre entreprise">

    <meta
      property="og:description"
      content="Agence d'accompagnement en transformation digitale de votre entreprise"
    />

    <meta property="og:url" content="https://cbracesglobal.com/" />
    <meta property="og:type" content="website" />

    <meta property="og:image" content="https://cbracesglobal.com/images/cb9dbaeb7fbc2b27f33354b2dfbf94bf.png/" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="100" />
    <link rel="canonical" href="https://cbracesglobal.com">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../images/cb9dbaeb7fbc2b27f33354b2dfbf94bf.png');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body class="w-full overflow-x-hidden">
    <div class="relative w-full overflow-x-hidden">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script>
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script>
        const lenis = new Lenis({
            // duration: 13.2,
            lerp: 0.05,
            easing: (t) => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t)),
            direction: "vertical",
            gestureDirection: "vertical",
            smooth: true,
            smoothTouch: false,
            touchMultiplier: 2,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    </script>
</body>

</html>
