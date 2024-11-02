@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
  <li>
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>