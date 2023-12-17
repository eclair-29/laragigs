@extends('layout')

@section('content')
@include('partials._search')

<div class="m-auto w-11/12 max-w-7xl">
  <a href="/" class="flex text-black mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 mr-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
    </svg>
    Back
  </a>
  <x-card>
    <div class="w-full h-28 opacity-30 bg-no-repeat bg-center bg-cover"
      style="background-image: url({{asset('images/hero.png')}})"></div>
    <div class="flex flex-col items-center justify-center p-10 text-center">
      {{-- <img class="w-48 mr-6 mb-6" src="images/acme.png" alt="" /> --}}

      <h3 class="text-2xl mb-2">
        {{$listing->title}}
      </h3>
      <div class="text-lg font-medium mb-4">
        {{$listing->organization}}
      </div>

      <x-listing-tags :tagsCsv="$listing->tags" />

      <div class="text-base my-4">
        <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
      </div>
      <div class="w-full mb-6"></div>
      <div class="w-full">
        <h3 class="text-lg font-medium mb-4">
          Job Description
        </h3>
        <div class="space-y-6">
          <p class="text-base text-left">
            {{$listing->description}}
          </p>

          <div class="grid grid-cols-2 gap-4">
            <a href="mailto:{{$listing->email}}"
              class="block border border-red-500 text-red-500 py-2 text-sm rounded-none hover:opacity-80">
              Contact Employer</a>

            <a href="{{$listing->website}}" target="_blank"
              class="block border border-black text-black py-2 text-sm rounded-none hover:opacity-80">Visit Website</a>
          </div>
        </div>
      </div>
    </div>
  </x-card>

  <div class="flex mt-6">
    <a href="/listings/{{$listing->id}}/edit" class="border border-teal-500 px-4 py-2 text-teal-500 text-sm">
      Edit
    </a>
    <form action="/listings/{{$listing->id}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="border border-red-500 px-4 py-2 text-red-500 text-sm ml-2">Delete</button>
    </form>
  </div>
</div>

@endsection