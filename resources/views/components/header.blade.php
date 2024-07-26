<header class="w-full fixed top-0 left-0 bg-white shadow max-md:hidden">
    <div class="w-full flex items-center justify-between px-20 lg:px-5 max-lg:px-5">
        <a class="block" href="{{ route('website') }}">
            <img class="w-32 h-16 object-cover" src="{{ asset('images/22b9665bd3943a39a9fc687290fac878.png') }}" alt="">
        </a>

        <ul class="flex items-center gap-x-10 max-lg:gap-x-5">
            <li><a href="#accueil" onclick="lenis.scrollTo('#accueil')">Accueil</a></li>
            <li><a href="#offres" onclick="lenis.scrollTo('#offres')">Offres</a></li>
            <li><a href="#pourquoi" onclick="lenis.scrollTo('#pourquoi')">Pourquoi nous choisir ?</a></li>
            <li><a href="#clients" onclick="lenis.scrollTo('#clients')">Nos clients</a></li>
        </ul>

        <a class="block px-5 py-1 bg-[#270665] text-white hover:bg-[#BC0045] duration-75 ease-in rounded" href="#">Prendre RDV</a>
    </div>
</header>

<header class="w-full absolute top-0 left-0 hidden max-md:block p-2 rounded">
    <a class="bg-white rounded grid place-items-center mb-1" href="{{ route('website') }}">
        <img class="w-32 h-16 object-cover" src="{{ asset('images/22b9665bd3943a39a9fc687290fac878.png') }}" alt="">
    </a>
    <ul class="grid grid-cols-2 gap-1">
        <li><a class="block bg-white rounded px-3 py-1" href="#accueil">Accueil</a></li>
        <li><a class="block bg-white rounded px-3 py-1" href="#offres">Offres</a></li>
        <li><a class="block bg-white rounded px-3 py-1" href="#pourquoi">Nous choisir ?</a></li>
        <li><a class="block bg-white rounded px-3 py-1" href="#clients">Nos clients</a></li>
    </ul>
</header>