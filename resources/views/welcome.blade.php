@extends('layouts.app')

@section('title', 'Accueil')
@section('content')
    <section class="pb-8 bg-top bg-cover bg-no-repeat mix-blend-darken"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.7), rgba(37, 37, 37, 0.7)), url('/img/background.png')">

        <div class="container px-4">
            <div class="py-32 px-20 ">
                <div class="max-w-lg mt-10 mb-8">
                    <h2 class="text-3xl md:text-4xl mb-4 text-white font-bold font-heading">
                        PIÈCES DÉTACHÉES
                        & SERVICES
                        POUR ENGINS ROULANTS

                    </h2>
                </div>
            </div>

        </div>

    </section>

    <div class="flex  flex-wrap items-center justify-center max-w-4xl mx-auto pt-12 pb-4">
        @foreach ($fournisseurs as $fr)

            <div class="w-1/2 md:w-1/3 lg:w-1/6 mb-8">
                <img class="mx-auto w-16" src="{{ URL::asset('storage/' . $fr->logo) }} " alt="{{ $fr->logo }}">
            </div>
        @endforeach

    </div>

    <section class="relative py-20">
        <div class="container px-4 mx-auto">
          <div class="relative flex flex-wrap items-center -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
              <img class="h-96 lg:h-128 w-full rounded-xl object-cover" src="/img/background.png" alt="">
            </div>
            <div class="relative w-full lg:w-1/2 px-4">
              <div class="relative lg:pl-10 max-w-lg">
                <h2 class="mt-8 mb-6 lg:mb-10 lg:pr-8 text-4xl font-semibold font-heading">BULLDOZEN vous propose un large choix de pièces de rechange</h2>
                <p class="mb-6 lg:mb-12 text-xl text-gray-500">Quel que soit la marque de votre ; Pelle, Bulldozer, niveleuse, Chargeur, Mini-Pelle, Chariot de forage, Trancheuse, Finisseur, Compacteur, Foreuse…. la société BULLDOZEN vous propose un large choix de pièces de rechange, Une gamme très étendue, des stocks très importants, et un service Multimarques rapide dédiés à vos besoins.</p>
                <a class="text-xl text-yellow-500 underline hover:no-underline font-medium" href="{{ route('apropos') }}">En Savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-20">
        <div class="container px-4 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Nos Categories</h1>
            <div class="h-1 w-20 bg-yellow-500 rounded mb-5"></div>
            <div class="flex flex-wrap -mx-3 overflow-hidden sm:-mx-3 md:-mx-4 lg:-mx-4 xl:-mx-1">
                @foreach ($categories as $cat )
                <div class="my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 md:my-4 md:px-4 lg:my-4 lg:px-4 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">

         <div class="bg-white shadow-md  rounded-3xl p-4 m-2">
            <div class="flex-none lg:flex">
                <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                    <img src="{{ URL::asset('storage/' . $cat->image) }}"
                        alt="{{ $cat->name }}" class=" w-full  object-scale-down lg:object-contain  lg:h-48 rounded-2xl">
                </div>
                <div class="flex-auto ml-3 justify-evenly py-2">
                    <div class="flex flex-wrap ">

                        <h2 class="flex-auto text-lg font-medium">{{ Str::limit($cat->name, 30, '...') }}</h2>
                    </div>
                    <p class="mt-12"></p>
                    <p class="text-gray-500 text-sm">{{ Str::limit($cat->description, 20, '...') }}</p>
                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-sm font-medium justify-end">

                        <a href="{{ route('products', ['category' => $cat->slug]) }}"
                            class="mb-2 md:mb-0 bg-yellow-600 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-yellow-700"
                            type="button" aria-label="like">Visiter</a>
                    </div>
                </div>
            </div>
        </div>
                </div>
            @endforeach

          </div>
          <div class="text-center"><a class="inline-block py-4 px-8 text-xs text-white font-semibold leading-none bg-yellow-600 hover:bg-yellow-700 rounded" href="{{ route('products') }}">Tout nos categories</a></div>
        </div>
      </section>
      <section class="py-20">
        <div class="container px-4 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Nos Categories</h1>
            <div class="h-1 w-20 bg-yellow-500 rounded mb-5"></div>
            <div class="flex flex-wrap -mx-3 overflow-hidden sm:-mx-3 md:-mx-4 lg:-mx-4 xl:-mx-1">
                @foreach ($products as $pr )
                <div class="my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 md:my-4 md:px-4 lg:my-4 lg:px-4 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">

         <div class="bg-white shadow-md  rounded-3xl p-4 m-2">
            <div class="flex-none lg:flex">
                <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                    <img src="{{ URL::asset('storage/' . $pr->image) }}"
                        alt="{{ $pr->name }}" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                </div>
                <div class="flex-auto ml-3 justify-evenly py-2">
                    <div class="flex flex-wrap ">

                        <h2 class="flex-auto text-lg font-medium">{{ Str::limit($pr->name, 30, '...') }}</h2>
                    </div>
                    <p class="mt-12"></p>
                    <p class="text-gray-500 text-sm">{{ Str::limit($pr->description, 20, '...') }}</p>
                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-sm font-medium justify-end">

                        <a href="{{ route('products.show', $pr->slug) }}"
                            class="mb-2 md:mb-0 bg-yellow-600 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-yellow-700"
                            type="button" aria-label="like">Visiter</a>
                    </div>
                </div>
            </div>
        </div>
                </div>
            @endforeach

          </div>
          <div class="text-center"><a class="inline-block py-4 px-8 text-xs text-white font-semibold leading-none bg-yellow-600 hover:bg-yellow-700 rounded" href="{{ route('products') }}">Tout nos produits</a></div>
        </div>
      </section>

    <section class="py-10">
        <div class="flex  flex-wrap items-center justify-center max-w-4xl mx-auto pt-12 pb-4">
            @foreach ($fournisseurs2 as $fr)

                <div class="w-1/2 md:w-1/3 lg:w-1/6 mb-8">
                    <img class="mx-auto w-16" src="{{ URL::asset('storage/' . $fr->logo) }} " alt="{{ $fr->logo }}">
                </div>
            @endforeach

        </div>

    </section>
@section('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: false
                }
            }
        })
    </script>
@endsection
@stop
