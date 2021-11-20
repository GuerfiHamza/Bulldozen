@extends('layouts.app')

@section('title', $product->name)

@section('content')
<section class="py-20">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -mx-4 mb-24">
        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
          <div class="relative mb-10" style="height: 564px;" id="slider">
            {{-- <a class="" href="#" > --}}
              {{-- <svg class="absolute top-1/2 left-0 ml-8 transform translate-1/2" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg" id="slideLeft">
                <path d="M9 16.0185C9.268 16.2905 9.268 16.7275 9 16.9975C8.732 17.2675 8.299 17.2685 8.031 16.9975L0.201 9.0895C-0.067 8.8195 -0.067 8.3825 0.201 8.1105L8.031 0.2025C8.299 -0.0675 8.732 -0.0675 9 0.2025C9.268 0.4735 9.268 0.9115 9 1.1815L1.859 8.6005L9 16.0185Z" fill="#1F40FF"></path>
              </svg> --}}
            {{-- </a> --}}
            <img class="object-cover w-full h-full " id="featured" src="{{ URL::asset('storage/'.$product->image) }} " alt="">
            {{-- <a class="absolute top-1/2 right-0 mr-8 transform translate-1/2" href="#" >
              <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg" id="slideRight">
                <path d="M0.19922 1.1817C-0.0687795 0.909696 -0.0687794 0.472695 0.19922 0.202695C0.46722 -0.0673054 0.90022 -0.0683048 1.16822 0.202695L8.99822 8.11069C9.26622 8.3807 9.26622 8.81769 8.99822 9.08969L1.16822 16.9977C0.900219 17.2677 0.467218 17.2677 0.199219 16.9977C-0.0687809 16.7267 -0.0687808 16.2887 0.199219 16.0187L7.34022 8.5997L0.19922 1.1817Z" fill="#1F40FF"></path>
              </svg>
            </a> --}}
          </div>
          <div class="flex flex-wrap -mx-2">
            <div class="w-1/2 sm:w-1/4 p-2">
                <a class="block border border-yellow-300" href="#">
                  <img class="w-full h-32 object-cover thumbnail active" src="{{ URL::asset('storage/'.$product->image) }}" alt="">
                </a>
              </div>
              @foreach (json_decode($product->images, true) as $image)

            <div class="w-1/2 sm:w-1/4 p-2">
              <a class="block border border-yellow-300" href="#">
                <img class="w-full h-32 object-cover thumbnail active" src="{{ URL::asset('storage/'.$image) }}" alt="">
              </a>
            </div>
            @endforeach

          </div>
        </div>
        <div class="w-full md:w-1/2 px-4">
          <div class="lg:pl-20">
            <div class="mb-10 pb-10">
              <span class="text-gray-500">{{ $product->brand }}</span>
              <h2 class="mt-2 mb-6 max-w-xl text-5xl md:text-6xl font-bold font-heading">{{ $product->name }}</h2>


              <p class="max-w-md text-gray-500">{{ $product->details }}</p>
            </div>


          </div>
        </div>
      </div>
      <div>
        <ul class="flex flex-wrap mb-16 border-b-2">
          <li class="w-1/2 md:w-auto inline-block py-6 px-10 bg-white text-gray-500 font-bold font-heading shadow-2xl">Description</li>

        </ul>
        <h3 class="mb-8 text-3xl font-bold font-heading text-yellow-300">Description</h3>
        <p class="max-w-2xl text-gray-500">{{ $product->description }}</p>
      </div>
    </div>
  </section>

  @section('scripts')
  <script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')

    for (var i=0; i < thumbnails.length; i++){

        thumbnails[i].addEventListener('mouseover', function(){

            if (activeImages.length > 0){
                activeImages[0].classList.remove('active')
            }


            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }


    let buttonRight = document.getElementById('slideRight');
    let buttonLeft = document.getElementById('slideLeft');

    buttonLeft.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft -= 180
    })

    buttonRight.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft += 180
    })


</script>
  @endsection
@endsection
