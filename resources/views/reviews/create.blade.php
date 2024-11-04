<x-layout>
    <div>
        <img id="js--img" src="{{$listing->img ? asset('storage/' . $listing->img) : asset('/images/no-image.png')}}" alt="" onload="getAverageColor()"/>
        <h1>
            {{$listing['title']}}
        </h1>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <p>
            {{$listing['description']}}
        </p>
    </div>
    <header class="form-header">
      <h2 class="form-title">Create a review</h2>
      <p class="form-subtitle">Create a review for</p>
    </header>
    <form method="POST" action="/review/{{$listing->id}}" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Review Title</label>
            <input type="text" class="form-input" name="title" placeholder="Example: Green soccer shirt" value="{{ old('title') }}" />
            @error('title')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-input" name="description" rows="10" placeholder="Describe the item">{{ old('description') }}</textarea>
            @error('description')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="submit-button">Create review</button>
            <a href="/" class="back-link">Back</a>
        </div>
    </form>
</x-layout>

<style>
    body{
        min-height: 100vh;
        width: 100vw;
    }

    div{
        width: fit-content;
        margin: 0 auto;
    }

    div h1, p{
        margin: 0.3rem 0;
    }

    img{
        width: 25rem;
        max-width: 80vw;
        display: block;
        margin: 0 auto;
    }

    .submit-button{
        margin-left: auto;
        display: block;
    }
</style>