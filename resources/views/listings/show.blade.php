<x-layout>
    <img src="{{$listing->img ? asset('storage/' . $listing->img) : asset('/images/no-image.png')}}" alt="" />
    <h2>
        {{$listing['title']}}
    </h2>
    <x-listing-tags :tagsCsv="$listing->tags" />
    <p>
        {{$listing['description']}}
    </p>
</x-layout>