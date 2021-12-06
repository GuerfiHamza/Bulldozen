@extends('layouts.app')

@section('title', 'A propos')

@section('content')
<section class="relative py-20">
    <div class="relative container px-4 mx-auto">
      <div class="flex flex-wrap -mx-4 mt-5">

        <div class="relative w-full  lg:w-1/2 px-4">
          <img class="rounded-xl object-cover" src="{{ URL::asset('storage/' . $about->image) }}" alt="">
        </div>
        <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
            <div class="max-w-lg">
              <p class=" text-gray-500">{!! $about->description !!}</p>
            </div>
          </div>
      </div>
    </div>
  </section>
@endsection
