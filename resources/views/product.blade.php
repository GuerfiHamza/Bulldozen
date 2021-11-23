@extends('layouts.app')

@section('title', $product->name)

@section('content')
<section class="py-20">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -mx-4 mb-24">
        <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
          <div class="relative mb-10" style="height: 564px;" id="slider">

            <img class="object-cover w-full h-full " id="featured" src="{{ URL::asset('storage/'.$product->image) }} " alt="">

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


              <p class="max-w-md text-gray-500 mb-5">{{ $product->details }}</p>
                <hr>
              <h3 class="mb-8 text-xl font-bold font-heading mt-5">Description</h3>
                <p class="max-w-2xl text-gray-500">{{ $product->description }}</p>
            </div>


          </div>
        </div>
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
