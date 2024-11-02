<x-layout>
<h2>
    {{$listing['title']}}
</h2>
<x-listing-tags :tagsCsv="$listing->tags" />
<p>
    {{$listing['description']}}
</p>
</x-layout>