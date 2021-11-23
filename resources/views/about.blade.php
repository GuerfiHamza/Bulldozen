@extends('layouts.app')

@section('title', 'A propos')

@section('content')
<div class="container mx-auto py-20">
{!! $about->description !!}

</div>
@endsection
