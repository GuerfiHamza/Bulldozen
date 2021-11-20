@extends('layouts.app')

@section('title', 'Accueil')
@section('content')
    <section class="px-2 py-32  md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div
                        class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Beautiful Pages to</span>
                            <span class="block text-yellow-600 xl:inline">Tell Your Story!</span>
                        </h1>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been easier
                            to build beautiful websites that convey your message and tell your story.</p>
                        <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-yellow-600 rounded-md sm:mb-0 transition-colors delay-150 duration-300 hover:bg-yellow-700 sm:w-auto">
                                Try It Free
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                            <a href="#_"
                                class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md transition-colors delay-150 duration-300 hover:bg-gray-200 hover:text-gray-600">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="/img/banner2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Nos Catégories</h1>
            <div class="h-1 w-20 bg-yellow-500 rounded"></div>
        </div>
        <div class=" flex flex-wrap overflow-hidden">
            <div class="owl-carousel container mx-auto overflow-hidden">

                @foreach ($categories as $category)
                    <div class="my-1 px-1 w-full overflow-hidden border-b-2 border-yellow-500">
                        <a href="{{ route('products', ['category' => $category->slug]) }}" class=" overflow-hidden">
                            <div class=" mx-auto overflow-hidden bg-gray-100 rounded-lg shadow-lg ">
                                <img class="object-cover w-full h-56"
                                    src=" {{ URL::asset('storage/' . $category->image) }} " alt="avatar">

                                <div class="py-5 text-center">
                                    <p class="block text-2xl font-bold text-gray-800">{{ $category->name }}</p>
                                    <span class="text-sm text-gray-700 ">{{ $category->description }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <section
        class="box-border relative overflow-hidden leading-7 text-gray-900 bg-white border-0 border-gray-200 border-solid">
        <div class="relative z-10 mx-auto max-w-7xl">
            <div
                class="flex flex-col items-center justify-center w-full px-8 py-20 space-y-6 text-center border-solid md:w-2/3 lg:w-1/2 md:space-y-10 md:items-start md:py-48 md:text-left lg:py-56 xl:py-64 lg:pl-12 lg:pr-16 xl:pl-16 xl:pr-24">
                <h1
                    class="w-full text-4xl font-extrabold leading-tight tracking-tight text-left text-black md:text-5xl lg:text-6xl xl:text-7xl">
                   {{$banner->title}}
                </h1>
                <p class="text-xl leading-tight text-left text-gray-700 border-0 border-gray-200 w md:text-2xl">
                    {{ $banner->description }}
                </p>

            </div>
        </div>
        <div class="absolute top-0 right-0 hidden w-1/3 h-full md:block lg:w-1/2">
            <img class="object-cover w-full h-full"
                src="/img/banner2.png">
        </div>
    </section>
    <section>
        <div class="container mx-auto mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Nos Produits</h1>
            <div class="h-1 w-20 bg-yellow-500 rounded"></div>
        </div>
        <div class=" flex flex-wrap overflow-hidden">
            <div class="owl-carousel container mx-auto overflow-hidden">
                @foreach ($products as $product)

                    <div class="my-1 px-1 w-full overflow-hidden ">
                        <a href="#" class=" overflow-hidden">
                            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm">
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img class="rounded-t-lg" src="{{ URL::asset('storage/' . $product->image) }}"
                                        loading="lazy" />
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('products.show', $product->slug) }}">
                                        <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
                                            {{ $product->name }}</h5>
                                    </a>
                                    <p class="font-normal text-gray-700 mb-3">{{ $product->details }}</p>
                                    <a href="{{ route('products.show', $product->slug) }}"
                                        class="transition-colors delay-150 duration-300 text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center">
                                        Read more
                                        <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach



            </div>
        </div>
        <div class="container mx-auto flex flex-col justify-center items-center mt-3">
            <a href="{{ route('products') }}"
                class="transition-colors delay-150 duration-300 text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-6 py-4 text-center inline-flex ">
                Voir plus
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </section>


    <section class="py-20 mt-10">
        <div class="container mx-auto px-4">
            <h2 class="mb-10 text-center text-sm font-bold font-heading text-gray-400">Découvrez ceux qui nous font
                confiance !</h2>
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/12 px-4 mb-10 md:mb-0">

                </div>
                <div class="w-full md:w-10/12 px-4 -mb-6">
                    <div class="flex flex-wrap -mx-4 owl-carousel">
                        @foreach ($partenaires as $pr)

                            <div class="w-full sm:w-1/2 md:w-1/3 xl:w-1/6 px-2 mb-6">
                                <div class="flex mx-auto h-40 w-40 px-2 items-center justify-center rounded-full bg-white">
                                    <img class="mx-auto" src="{{ URL::asset('storage/' . $pr->logo) }}"
                                        alt="{{ $pr->name }}">
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
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
