@props(['listing'])

<x-card class="p-6">
  <div class="flex">
    <img class="hidden h-32 w-auto mr-6 md:block"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg')}}" alt="" />
    <div>
      <h3 class="text-2xl hover:text-[#F05340]">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <div class="text-lg font-medium mb-4">{{$listing->organization}}</div>

      <x-listing-tags :tagsCsv="$listing->tags" />

      <div class="mt-4">
        <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
      </div>
    </div>
  </div>
</x-card>