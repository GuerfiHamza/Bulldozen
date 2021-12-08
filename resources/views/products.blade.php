@extends('layouts.app')

@section('title', 'Produits')
@section('content')

    <section class="relative py-24 ">
        <div class="container px-4 mx-auto">
            <div class="relative flex flex-wrap items-center -mx-4">
                <div class="relative w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
                    <div class="relative lg:pl-10 max-w-lg">
                        <h2 class="mb-8 text-4xl font-bold text-yellow-500">BULLDOZEN répond à toutes vos demandes.</h2>
                        <p class="text-lg text-gray-500">BULLDOZEN répond à toutes vos demandes
                            pour toutes les composantes de vos machines ; moteur, transmission, hydraulique, chaines et
                            trains de roulement, pièces d’usure, mais également tout équipement d’exploitation de mines
                            et/ou de carrières.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <img class="clip-path-left-top bg-cover bg-center" src="/img/background.png" alt="BULLDOZEN">
                </div>
            </div>
        </div>
    </section>
    <div class="flex  flex-wrap items-center justify-center max-w-7xl mx-auto pt-12 pb-4">
        @foreach ($fournisseurs as $fr)

            <div class="w-1/2 md:w-1/3 lg:w-1/6 mb-8 px-8">
                <img class="mx-auto" src="{{ URL::asset('storage/' . $fr->logo) }} " alt="{{ $fr->logo }}">
            </div>
        @endforeach

    </div>
    <section class="pt-10 ">
        <div class="container mx-auto px-4">


            <div class="flex flex-wrap -mx-3 mb-5">

                    @foreach ($products as $product)

                        <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6 lg:mb-2 min-h-96">
                            <div class="p-6 ">
                                <a class="block px-6 mt-6 mb-2" href="{{ route('products.show', $product->slug) }}">
                                    <img class="mb-5 mx-auto h-56 w-full object-contain"
                                        src="{{ URL::asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                    <h3 class="mb-2 text-xl font-bold font-heading">{{ $product->name }}</h3>

                                </a>

                            </div>
                        </div>
                    @endforeach

            </div>
            {!! $products->appends(request()->input())->links('vendor.pagination.simple-tailwind') !!}

        </div>
        </div>
    </section>

    <section class="py-10">
        <div class="flex  flex-wrap items-center justify-center max-w-7xl mx-auto pt-12 pb-4">
            @foreach ($fournisseurs2 as $fr)

                <div class="w-1/2 md:w-1/3 lg:w-1/6 mb-8 px-8">
                    <img class="mx-auto" src="{{ URL::asset('storage/' . $fr->logo) }} " alt="{{ $fr->logo }}">
                </div>
            @endforeach

        </div>

    </section>


@stop
