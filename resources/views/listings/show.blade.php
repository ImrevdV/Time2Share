<x-layout>
    <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
    <h2>
        {{$listing['title']}}
    </h2>
    <x-listing-tags :tagsCsv="$listing->tags" />
    <p>
        {{$listing['description']}}
    </p>
</x-layout>