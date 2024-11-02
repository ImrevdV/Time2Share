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

<div class="card-container">
@foreach ($listings as $listing)
    <div class="card">
        <a href="/listings/{{$listing['id']}}">
            <img src="{{$listing->img ? asset('storage/' . $listing->img) : asset('/images/no-image.png')}}" alt="" />
        </a>
        <h2>
            <a href="/listings/{{$listing['id']}}">
                {{$listing['title']}}
            </a>
        </h2>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <p>
            {{$listing['description']}}
        </p>
    </div>
@endforeach
</div>

@else
    <p>Currently no item listings :(</p>
@endunless
</x-layout>

<style>
    /* Search Form Styling */
    .search-form {
        margin: 1rem;
    }

    .search-container {
        position: relative;
        border: 2px solid white;
        border-radius: 0.5rem;
        padding: 0;
    }

    .icon-container {
        position: absolute;
        top: 1rem;
        left: 0.75rem;
        z-index: 20;
    }

    .search-icon {
        color: white;
        transition: color 0.3s;
    }

    .search-input {
        height: 3.5rem;
        width: 100%;
        padding-left: 2.5rem;
        padding-right: 5rem;
        border-radius: 0.5rem;
        border: none;
        outline: none;
        font-size: 1rem;
        z-index: 0;
        transition: box-shadow 0.3s;
        background-color: var(--bg-indent);
    }

    .search-input:focus {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .button-container {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
    }

    .search-button {
        height: 2.5rem;
        width: 5rem;
        color: white;
        background-color: var(--primary);
        border: none;
        border-radius: 0.5rem;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-button:hover {
        background-color: var(--primary-light);
    }
</style>