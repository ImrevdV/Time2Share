<x-layout>
    <h1>All your listings</h1>

    @unless (count($listings) == 0)
    <div class="listing-card-container">
    @foreach ($listings as $listing)
        <div class="listing-card">
            <a href="/listings/{{$listing['id']}}">
                <img src="{{$listing->img ? asset('storage/' . $listing->img) : asset('/images/no-image.png')}}" alt="" />
            </a>
            <h2>
                <a href="/listings/{{$listing['id']}}">
                    {{$listing['title']}}
                </a>
            </h2>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <form method="POST" action="/listings/{{$listing->id}}">
                @csrf
                @method('DELETE')
                <button class="delete-button"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </div>
    @endforeach
    </div>

    @else
        <p>You currently have no item listings :(</p>
    @endunless
</x-layout>

<style>
    h1, p{
        text-align: center;
        margin: 0.5rem;
    }
</style>