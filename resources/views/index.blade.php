@extends('layouts.clientLayout')
@section('Content')
    <div>
        {{-- picture --}}
        <div class="relative">
            <img src="{{ asset('images/vitesse-sur-autoroute.jpg') }}" class="w-full h-96 filter blur-sm" alt="">
            <div class="absolute inset-0 flex flex-col justify-center text-white text-center ">
                <h3 class="text-2xl ">Solution complète pour la gestion de flotte</h3>
                <h6 class="font-light text-lg">Ergonomique, fiable, adaptable</h6>
            </div>
        </div>

        {{-- qui sommes nous --}}
        <div class="w-full bg-white text-center p-16">
            <h1 class="text-2xl"><ins>QUI SOMMES-NOUS ?</ins></h1>
            <p class="pt-10 w-full md:w-1/2 mx-auto italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est sit amet, consectetur adipiscing laborum.
            </p>

            <div class="flex flex-wrap mx-auto justify-center py-16 gap-10">
                <div class="w-72 px-10 flex flex-col justify-center gap-5">
                    <div class="flex mx-auto">
                        <img src="{{ asset('images/thumbs-up_12503653.png') }}" class="w-24" alt="">
                    </div>
                    <h3 class="font-bold">SATISFACTION GARANTIE</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    </p>
                </div>

                <div class="w-72 px-10 flex flex-col justify-center gap-5">
                    <div class="flex mx-auto">
                        <img src="{{ asset('images/approved_8622117.png') }}" class="w-24" alt="">
                    </div>
                    <h3 class="font-bold">QUALITE</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    </p>
                </div>

                <div class="w-72 px-10 flex flex-col justify-center gap-5">
                    <div class="flex mx-auto">
                        <img src="{{ asset('images/location_7712487.png') }}" class="w-24" alt="">
                    </div>
                    <h3 class="font-bold">COMPTABILITE</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    </p>
                </div>

            </div>
        </div>


        {{-- photo arriere plan --}}
        <div>
            <!-- Image en arrière-plan avec effet de flou et fixe -->
            <img src="{{ asset('images/R (1).jpeg') }}" class="ima" alt="">

            <!-- Contenu de la page -->
            <div class="flex justify-center ">
                <div class="stats">
                    <h1 class="text-4xl font-bold">50%</h1>
                    <p class="text-xl font-thin">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="stats">
                    <h1 class="text-4xl font-bold">100%</h1>
                    <p class="text-xl font-thin">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="stats">
                    <h1 class="text-4xl font-bold">42</h1>
                    <p class="text-xl font-thin">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="stats">
                    <h1 class="text-4xl font-bold">250</h1>
                    <p class="text-xl font-thin">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>


        {{-- solutions --}}
        <div class="h-content bg-white w-full p-16">
            <h1 class="text-2xl text-center"><ins>SOLUTIONS</ins></h1>

            <div class="flex flex-wrap mx-auto justify-center py-10 gap-10">
                <div class="w-80 px-10 flex flex-col justify-center gap-2">
                    <div class="flex mx-auto">
                        <img src="{{ asset('images/bethoncourt_retouche_modifie.jpg') }}" class="" alt="">
                    </div>
                    <h3 class="font-bold">Maroc GEO</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                    </p>
                </div>

                <div class="w-80 px-10 flex flex-col justify-center gap-2">
                    <div class="flex mx-auto">
                        <img src="{{ asset('images/cartel-de-una-zona-de-bajas-emisiones.r_d.490-598.webp') }}"
                            class="" alt="">
                    </div>
                    <h3 class="font-bold">Dolibarr Maroc</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                    </p>
                </div>

                <div class="w-80 px-10 flex flex-col justify-center gap-2">
                    <div class="flex mx-auto">
                        <img src="{{ asset('images/R.jpeg') }}" class="" alt="">
                    </div>
                    <h3 class="font-bold">MapME Phone</h3>
                    <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                    </p>
                </div>

            </div>
            <div class="flex justify-center ">
                <button class="py-1 px-8 rounded-full border-4 border-blue-300">En Savoir Plus</button>

            </div>
        </div>


        {{-- sponsor --}}
        <div class="h-content bg-gray-100 w-full p-10 flex flex-wrap justify-center gap-16">
            <img src="{{ asset('images/securitas.jpeg') }}" class="w-32 h-20" alt="">
            <img src="{{ asset('images/tnt-logo.png') }}" class="w-32 h-20" alt="">
            <img src="{{ asset('images/R.png') }}" class="w-32 h-20" alt="">
            <img src="{{ asset('images/R (1).png') }}" class="w-32 h-20" alt="">
            <img src="{{ asset('images/Top-Class-Emploi-Recrutement-520x292.webp') }}" class="w-32 h-20" alt="">
        </div>

    </div>
@endsection
