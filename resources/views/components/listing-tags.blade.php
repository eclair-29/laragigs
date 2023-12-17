@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex flex-wrap">
  @foreach ($tags as $tag)
  <li class="flex items-center justify-center border border-[#F05340] text-[#F05340] py-1 px-3 mr-2 md:my-1 text-xs">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>