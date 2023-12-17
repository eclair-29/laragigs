@extends('layout')

@section('content')
<x-card class="p-10 w-11/12 max-w-2xl mx-auto mt-12">
  <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
      Create a Gig
    </h2>
    <p class="mb-4">Post a gig to find a developer</p>
  </header>

  <form action="/listings" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="mb-4">
      <label for="organization" class="inline-block text-sm mb-2">Organization Name</label>
      <input type="text"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="organization" value="{{old('organization')}}" />

      @error('organization')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="title" class="inline-block text-sm mb-2">Job Title</label>
      <input type="text"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="title" placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />

      @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="location" class="inline-block text-sm mb-2">Job Location</label>
      <input type="text"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="location" placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />

      @error('location')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="email" class="inline-block text-sm mb-2">Contact Email</label>
      <input type="text"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="email" value="{{old('email')}}" />

      @error('email')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="website" class="inline-block text-sm mb-2">
        Website/Application URL
      </label>
      <input type="text"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="website" value="{{old('website')}}" />

      @error('website')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="tags" class="inline-block text-sm mb-2">
        Tags (Comma Separated)
      </label>
      <input type="text"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="tags" placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

      @error('tags')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="logo" class="inline-block text-sm mb-2">
        Organization Logo
      </label>
      <input type="file"
        class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="logo" />

      @error('logo')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label for="description" class="inline-block text-sm mb-2">
        Job Description
      </label>
      <textarea class="border border-gray-200 rounded-none p-2 w-full text-sm focus:outline-none focus:border-red-500"
        name="description" rows="10"
        placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

      @error('description')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4 flex justify-between items-center">
      <a href="/" class="text-black"> Back </a>
      <button type="submit"
        class="border border-red-500 text-red-500 rounded-none py-2 px-4 hover:bg-red-500 hover:text-white">
        Create Gig
      </button>
    </div>
  </form>
</x-card>
@endsection