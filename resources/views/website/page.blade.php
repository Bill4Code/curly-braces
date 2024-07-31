@extends('layouts.app')
@section('content')
    <section id="accueil" class="w-full h-screen grid place-items-center">
        <div class="flex items-center justify-center flex-col gap-y-5 max-sm:px-2">
            <h1 class="text-center text-white font-bold text-6xl max-sm:text-3xl">Explorons demain ensemble</h1>
            <p class="text-center text-white text-lg">
                Nous vous accompagnons dans la transformation numérique et digitale de votre entreprise <br>
                Ventes / Marketing / Finance & Comptabilité / RH & Recrutement
            </p>
            <h2 class="text-center text-white font-bold text-2xl">Nous vous conseillons et mettons tout en place pour vous</h2>
            <a class="block w-40 text-center py-2 bg-[#270665] text-white hover:bg-[#BC0045] duration-75 ease-in rounded" href="#">Prendre RDV</a>
        </div>
    </section>

    <section id="offres" class="px-20 max-lg:px-5 max-sm:px-2 pb-10 bg-white">
        <h2 class="text-center py-20 max-sm:py-10 font-bold text-5xl max-sm:text-3xl">OFFRES</h2>
        <div class="grid grid-cols-2 max-sm:grid-cols-1 gap-x-10 max-md:gap-x-4">
            <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('images/912a2e7641287e809a79aac182525b8b.jpg') }}" alt="">
            <div>
                <h3 class="mb-8 font-bold text-4xl max-md:text-2xl max-sm:text-xl max-sm:mt-2">VERS UNE <br> TRANSFORMATION <br> DIGITALE REUSSIE</h3>
                <p>
                    Nous savons que chaque entreprise est unique et mérite un accompagnement unique. 
                    C’est pour cela que nous nous adaptons à vos réalités et procédures pour vous proposer des solutions qui sont adaptées à vos besoins.
                </p>
            </div>
        </div>
        <article class="grid grid-cols-4 max-lg:grid-cols-2 max-sm:grid-cols-1 gap-10 lg:gap-4 max-lg:gap-4 max-sm:gap-2 mt-20 max-sm:mt-10">
            <div class="h-[18em] rounded-lg flex items-center justify-center flex-col px-5 gap-y-3 bg-[#BC0045] text-white">
                <div class="w-16">
                    <img src="{{ asset('images/3526a0c29043f96119457a32b711e732.png') }}" alt="">
                </div>
                <p class="font-bold text-center">Ventes & Marketing</p>
                <p class="text-center text-sm">Nous transformons, améliorons et formons vos équipes à accroître leur rendement avec nos solutions digitales </p>
            </div>
            <div class="h-[18em] rounded-lg flex items-center justify-center flex-col px-5 gap-y-3 bg-[#BC0045] text-white">
                <div class="w-16">
                    <img src="{{ asset('images/3471a9a5a993d9b465d0a7941db73d78.png') }}" alt="">
                </div>
                <p class="font-bold text-center">Gestion financière et Stocks</p>
                <p class="text-center text-sm">Nous mettons en place un puissant outils de gestion (ERP) dans vos services, parfaitement connecté au reste de votre écosystème.</p>
            </div>
            <div class="h-[18em] rounded-lg flex items-center justify-center flex-col px-5 gap-y-3 bg-[#BC0045] text-white">
                <div class="w-16">
                    <img src="{{ asset('images/2503e731aee959e6a978f45bbb0c611a.png') }}" alt="">
                </div>
                <p class="font-bold text-center">RH & Recrutement</p>
                <p class="text-center text-sm">Depuis le recrutement jusqu’à la gestion de carrière, simplifiez-vous la vie et celle de vos équipes avec des outils dédiés au recrutement et à la gestion des ressources humaines. </p>
            </div>
            <div class="h-[18em] rounded-lg flex items-center justify-center flex-col px-5 gap-y-3 bg-[#BC0045] text-white">
                <div class="w-16">
                    <img src="{{ asset('images/150be60dac33fbffc3ed7573ffc2e605.png') }}" alt="">
                </div>
                <p class="font-bold text-center">Gestion de projet</p>
                <p class="text-center text-sm">Suivez en temps réel vos projets, assignez des tâches à vos équipes en suivant les niveaux d’éxécution, planifiez vos rendez-vous,, ...
                    Nos outils vous permettront de faire de cela et plus encore  </p>
            </div>
        </article>
    </section>

    <section id="pourquoi" class="w-full px-20 max-lg:px-5 max-sm:px-2 pb-20 text-white">
        <h2 class="text-center py-20 max-sm:py-10 font-bold text-5xl max-sm:text-xl">Pourquoi nous choisir ?</h2>
        <div class="grid grid-cols-2 max-sm:flex max-sm:flex-col-reverse place-items-center gap-x-10">
            <p class="text-white bg-[#270665] p-10 max-sm:p-5 rounded-lg">Notre spécialisation dans la transformation digitale nous permet d'accompagner efficacement les entreprises de toutes tailles et de divers secteurs. Nos experts possèdent une connaissance approfondie des technologies et des meilleures pratiques, garantissant des projets réalisés avec précision et efficacité.</p>
            <p class="font-bold text-5xl max-md:text-3xl max-sm:text-xl max-sm:text-center max-sm:mb-2">EXPERTISE</p>
        </div>
        <div class="grid grid-cols-2 max-sm:flex max-sm:flex-col place-items-center gap-x-10 my-20 max-sm:my-10">
            <p class="font-bold text-5xl max-md:text-3xl max-sm:text-xl max-sm:text-center max-sm:mb-2">APPROCHE PERSONALISEE</p>
            <p class="text-white bg-[#270665] p-10 max-sm:p-5 rounded-lg">Nous comprenons que chaque entreprise est unique. C'est pourquoi nous effectuons un audit détaillé de votre structure pour identifier vos besoins spécifiques. En analysant vos défis et vos opportunités, nous proposons des solutions informatiques sur mesure adaptées à vos exigences.</p>
        </div>
        <div class="grid grid-cols-2 max-sm:flex max-sm:flex-col-reverse place-items-center gap-x-10">
            <p class="text-white bg-[#270665] p-10 max-sm:p-5 rounded-lg">Votre succès est notre priorité. Nous nous engageons à fournir des services de haute qualité tout en respectant les délais et les budgets convenus. Notre équipe est dédiée à votre projet et reste disponible pour tout support nécessaire, vous assurant ainsi une tranquillité d'esprit totale.</p>
            <p class="font-bold text-5xl max-md:text-3xl max-sm:text-xl max-sm:text-center max-sm:mb-2">ENGAGEMENT ET FIABILITE</p>
        </div>
        <div class="grid grid-cols-2 max-sm:flex max-sm:flex-col place-items-center gap-x-10 my-20 max-sm:my-10">
            <p class="font-bold text-5xl max-md:text-3xl max-sm:text-xl max-sm:text-center max-sm:mb-2">INNOVATION ET TECHNOLOGIES</p>
            <p class="text-white bg-[#270665] p-10 max-sm:p-5 rounded-lg">Nous utilisons les dernières technologies pour proposer des solutions innovantes et efficaces. Que ce soit pour améliorer la productivité, renforcer la sécurité ou optimiser les processus, nos solutions sont conçues pour offrir des résultats tangibles et mesurables.</p>
        </div>
    </section>

    <section id="clients" class="pb-20 max-sm:px-2 bg-white">
        <h2 class="text-center py-20 max-sm:py-10 font-bold text-5xl max-sm:text-xl">NOS CLIENTS</h2>

        <div class="flex items-center justify-center max-sm:flex-col max-sm:gap-y-5 gap-x-20 max-md:gap-x-10">
            <img class="w-52 max-sm:w-full h-40 border-2 rounded-lg object-cover" src="{{ asset('images/4ffbd0132544b43eacc135add6d8386d.png') }}" alt="">
            <img class="w-52 max-sm:w-full h-40 border-2 rounded-lg object-cover" src="{{ asset('images/5df5ca7b1130678da4534051739dd84e.png') }}" alt="">
            <img class="w-52 max-sm:w-full h-40 border-2 rounded-lg object-cover" src="{{ asset('images/078b23e6f89ed7bebd6b7ae5f04050c0.jpg') }}" alt="">
        </div>
    </section>

    <!-- Start customize contact section -->
    <section class="w-full bg-gray-100" id="contact">
        <h2 class="text-center py-10 max-sm:py-10 font-bold text-5xl max-sm:text-xl">CONTACT</h2>

        <div class="w-full grid grid-cols-2 max-sm:grid-cols-1 gap-10 max-md:gap-5 px-20 max-lg:px-5 py-16 max-sm:px-4">
            <img class="w-full h-[400px] rounded-lg object-cover shrink-0 max-sm:hidden" src="{{ asset('images/pexels-goumbik-590016.jpg') }}" alt="code">
            <div>
                <h3 class="uppercase font-bold text-4xl max-md:text-xl max-sm:text-2xl">Concrétisez <br>vos solutions <br> le plus tôt possible</h3>
                <form class="w-full mt-5" action="#">
                    <div class="w-full grid grid-cols-2 max-sm:grid-cols-1 gap-5">
                        <input class="h-10 pl-3 outline-none border-b bg-transparent" type="text" placeholder="Nom">
                        <input class="h-10 pl-3 outline-none border-b bg-transparent" type="text" placeholder="Prénom">
                    </div>
                    <input class="w-full h-10 pl-3 my-5 outline-none border-b bg-transparent" type="text" placeholder="Adresse e-mail">
                    <div class="w-full grid grid-cols-2 max-sm:grid-cols-1 gap-5">
                        <input class="h-10 pl-3 outline-none border-b bg-transparent" type="text" placeholder="Mobile">
                        <input class="h-10 pl-3 outline-none border-b bg-transparent" type="text" placeholder="Profession">
                    </div>
                    <div class="flex items-center max-sm:flex-col-reverse max-sm:items-start mt-10 gap-16 max-sm:gap-3">
                        <input class="text-white text-center bg-[#240464] py-3 px-5 hover:cursor-pointer max-sm:w-full rounded-lg" type="submit" value="Contacter">
                        <!-- <span class="flex items-center gap-2">
                            <input class="w-3 h-3" value="1" required type="checkbox">
                            <a href="/privacy-policy/" target="_blank">Acceptez les politiques de confidentialité</a>
                        </span> -->
                    </div>
                </form>
            </div>
        </div>
    </section>

    
    
@endsection