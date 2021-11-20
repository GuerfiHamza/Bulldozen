@extends('layouts.app')

@section('title', 'Produits')
@section('content')
<section class="py-20 ">
    <div class="container mx-auto px-4">


      <div class="flex flex-wrap -mx-3 mb-24">
        <div class="w-full lg:hidden px-3">
          <div class="flex flex-wrap -mx-2">
            <div class="w-1/2 md:w-1/3 px-2 mb-4">
              <div class="py-6 px-2 text-center bg-gray-100">
                <a class="font-bold font-heading" href="#">Category</a>
                <ul class="hidden text-left mt-6">
                  <li class="mb-4"><a href="#">New in</a></li>
                  <li class="mb-4"><a href="#">Activewear</a></li>
                  <li class="mb-4"><a href="#">Hoodies &amp; Sweatshirts</a></li>
                  <li class="mb-4"><a href="#">Jackets</a></li>
                  <li class="mb-4"><a href="#">Multipacks</a></li>
                  <li class="mb-4"><a href="#">Bags</a></li>
                  <li class="mb-4"><a href="#">Sports</a></li>
                  <li class="mb-4"><a href="#">Gifts</a></li>
                  <li><a href="#">Notes</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <div class="hidden lg:block w-1/4 px-3">
          <div class="mb-6 py-10 px-12 bg-gray-50">
            <h3 class="mb-8 text-2xl font-bold font-heading">Category</h3>
            <ul>
                @foreach ($categories as $category)

              <li class="mb-4"><a class="text-lg" href="{{ route('products', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
              @endforeach

            </ul>
          </div>

        </div>
        <div class="w-full lg:w-3/4 px-3">
          <div class="flex flex-wrap -mx-3">
              @foreach ($products as $product)
            <div class="w-full sm:w-1/2 md:w-1/3 px-3 mb-8 border border-yellow-500">
              <div class="p-6 bg-gray-50">
                <a class="block px-6 mt-6 mb-2 " href="{{ route('products.show', $product->slug) }}">
                  <img class="mb-5 mx-auto h-56 w-full object-contain " src="{{ URL::asset('storage/'.$product->image) }} " alt="{{ $product->name }}">
                  <h3 class="mb-2 text-xl font-bold font-heading">{{ $product->name }}</h3>
                  <p class="text-sm  font-heading ">
                   {{ $product->details }}
                  </p>
                </a>

              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
      <div class="text-center">
        <a class="inline-block bg-orange-300 hover:bg-orange-400 text-white font-bold font-heading py-6 px-8 rounded-md uppercase" href="#">Show More</a>
      </div>
    </div>
  </section>
   @stop
