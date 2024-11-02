<x-layout>
<h1>All listings</h1>

@unless (count($listings) == 0)

<form action="/" class="search-form">
    <div class="search-container">
        <div class="icon-container">
            <i class="fa fa-search search-icon"></i>
        </div>
        <input type="text" name="search" class="search-input" placeholder="Search item listings..." />
        <div class="button-container">
            <button type="submit" class="search-button">Search</button>
        </div>
    </div>
</form>


@foreach ($listings as $listing)
<h2>
    <a href="/listings/{{$listing['id']}}">
        {{$listing['title']}}
    </a>
</h2>
<x-listing-tags :tagsCsv="$listing->tags" />
<p>
    {{$listing['description']}}
</p>
    
@endforeach

@else
    <p>Currently no listings :(</p>
@endunless
</x-layout>