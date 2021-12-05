@extends('layouts.app')

@section('title', 'A propos')

@section('content')
<section class="relative py-20">
    <div class="relative container px-4 mx-auto">
      <div class="flex flex-wrap items-center -mx-4">

        <div class="relative w-full  lg:w-1/2 px-4">
          <img class="rounded-xl object-cover" src="{{ URL::asset('storage/' . $about->image) }}" alt="">
        </div>
        <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
            <div class="max-w-lg">
              <p class="text-xl text-gray-500">{!! $about->description !!}</p>
            </div>
          </div>
      </div>
    </div>
    <img class="hidden xl:block absolute top-0 right-0 mt-52" src="zeus-assets/icons/dots/yellow-dot-right-shield.svg" alt="">
  </section>
@endsection
