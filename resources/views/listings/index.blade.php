@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="grid lg:grid-cols-2 grid-cols-1 gap-4 m-auto w-11/12 max-w-7xl">
  @unless (count($listings) == 0)

  @foreach ($listings as $listing)
  <x-listing-card :listing="$listing" />
  @endforeach

  @else
  <p>No listings found</p>
  @endunless
</div>
<x-pagination class="mx-auto w-11/12 max-w-7xl">
  {{$listings->links()}}
</x-pagination>
@endsection