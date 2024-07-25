<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CurlyBraces Website</title>

    <meta property="og:title" content="CurlyBraces" />
    <meta
      property="og:description"
      content="Développement d'applications et de logiciels personnalisés pour les systèmes informatiques"
    />
    <meta property="og:url" content="https://cbracesglobal.com/" />
    <meta property="og:type" content="website" />

    <meta property="og:image" content="https://cbracesglobal.com/images/cb9dbaeb7fbc2b27f33354b2dfbf94bf.png/" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="100" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icon.png') }}" />

    @vite('resources/css/app.css')
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
