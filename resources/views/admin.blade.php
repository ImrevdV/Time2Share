<x-layout>
    <h1>All listings</h1>

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
    <h1>All users</h1>

    @unless (count($users) == 0)
    <div class="user-card-container">
    @foreach ($users as $user)
        <div class="user-card">
            <h2>
                {{$user['name']}}
            </h2>
            <form method="POST" action="/admin/{{$user->id}}">
                @csrf
                @method('DELETE')
                <button class="delete-button"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </div>
    @endforeach
    </div>

    @else
        <p>You are the only user</p>
    @endunless
</x-layout>

<style>
    h1, p{
        text-align: center;
        margin: 0.5rem;
    }

    .user-card-container {
        margin: 1.3rem auto;
        width: 95vw;
        columns: 25rem auto;
    }
    .user-card{
        width: 25rem;
        max-width: 95vw;
        background-color: var(--bg-indent);
        padding: 0.7rem;
        border-radius: 1.4rem;
        break-inside: avoid;
        margin: 0 auto;
        margin-bottom: 0.7rem;
    }

    .user-card h2, p{
        margin: 0.3rem auto;
    }
</style>