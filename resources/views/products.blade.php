@extends('layouts.app')

@section('title', 'Produits')
@section('content')

<section class="relative py-12 ">
    <div class="container px-4 mx-auto">
      <div class="relative flex flex-wrap items-center -mx-4">
        <div class="relative w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
          <div class="relative lg:pl-10 max-w-lg">
            <h2 class="mb-8 text-4xl font-bold text-yellow-500">BULLDOZEN répond à toutes vos demandes.</h2>
            <p class="text-lg text-gray-500">BULLDOZEN répond à toutes vos demandes
              pour toutes les composantes de vos machines ; moteur, transmission, hydraulique, chaines et trains de roulement, pièces d’usure, mais également tout équipement d’exploitation de mines et/ou de carrières.</p>
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
          <img class="clip-path-left-top bg-cover bg-center" src="/img/background.png" alt="BULLDOZEN">
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
<section class="pt-10 ">
    <div class="container mx-auto px-4">


      <div class="flex flex-wrap -mx-3 mb-24">
        <div class="w-full lg:hidden px-3">
          <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/3 px-2 mb-4">
              <div class="text-center bg-gray-100" aria-labelledby="nav-heading" x-data="{ isOpen: false }" :aria-expanded="isOpen">
                <button class="font-bold w-full py-4 font-heading" id="nav-heading" :aria-expanded="isOpen" aria-controls="nav-list" @click="isOpen = !isOpen">Catégories</button>
                <ul class="text-left mt-6" :hidden="!isOpen" x-cloak id="nav-list">
                  <li class="mb-4"><a href="{{ route('products') }}">Tout</a></li>
                    @foreach ($categories as $cat)
                  <li class="mb-4"><a href="{{ route('products', [$cat->slug]) }}" >{{ $cat->name }}</a></li>
                    @endforeach
                  <li><a href="#">Notes</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <div class="hidden lg:block w-1/4 px-3">
          <div class="mb-6 py-10 px-12 bg-gray-50">
            <h3 class="mb-8 text-2xl font-bold font-heading text-yellow-600">Catégories</h3>
            <ul>
              <li class="mb-4"><a class="hover:text-yellow-500 text-lg" href="{{ route('products') }}">Tout</a></li>

                @foreach ($categories as $category)

              <li class="mb-4"><a class="hover:text-yellow-500 text-lg" href="{{ route('products', ['category' => $category->slug]) }}" >{{ $category->name }}</a></li>
              @endforeach

            </ul>
          </div>

        </div>
        <div class="w-full lg:w-3/4 px-3">
          <div class="flex flex-wrap -mx-3">
              @foreach ($products as $product)
              <div class="my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 md:my-4 md:px-4 lg:my-4 lg:px-4 lg:w-1/3 xl:my-1 xl:px-1 xl:w-1/3">

                <div class=" p-6 bg-white rounded-xl ">
                    <img class="w-64 object-contain rounded-md mx-auto" src="{{ URL::asset('storage/' . $product->image) }}" alt="" />
                    <div class="mt-4">
                      <h1 class="text-2xl font-bold text-gray-700">{{ $product->name }}</h1>
                      <p class="text-sm mt-2 text-gray-700">{{ Str::limit($product->description, 40, '...') }}</p>

                      <div class="mt-4 mb-2 flex justify-between pl-4 pr-2">
                        <button class="block text-xl font-semibold text-gray-700 "></button>
                        <a href="{{ route('products.show', ($product->slug)) }}" class="text-lg block font-semibold py-2 px-6 text-white hover:text-white bg-yellow-400 hover:bg-yellow-700 rounded-lg shadow hover:shadow-md transition duration-300">Visiter</a>
                      </div>
                    </div>
                  </div>
                       </div>
            @endforeach

          </div>
          {!! $products->appends(request()->input())->links('vendor.pagination.simple-tailwind') !!}
        </div>
      </div>
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
   @stop
