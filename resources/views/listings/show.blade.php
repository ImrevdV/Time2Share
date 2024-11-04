<script>
    function getAverageColor() {
        const img = document.getElementById('js--img');
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');

        // Set canvas size to match the image
        canvas.width = img.width;
        canvas.height = img.height;
        
        // Draw the image on the canvas
        ctx.drawImage(img, 0, 0, img.width, img.height);
        
        const imageData = ctx.getImageData(0, 0, img.width, img.height);
        const pixels = imageData.data;
        let r = 0, g = 0, b = 0;
        
        // Loop through each pixel (every 4 values in array represent RGBA)
        for (let i = 0; i < pixels.length; i += 4) {
            r += pixels[i];
            g += pixels[i + 1];
            b += pixels[i + 2];
        }
        
        // Calculate average
        const pixelCount = pixels.length / 4;
        r = Math.floor(r / pixelCount);
        g = Math.floor(g / pixelCount);
        b = Math.floor(b / pixelCount);
        
        // Set the background gradient
        document.body.style.background = `linear-gradient(to bottom, rgb(${r}, ${g}, ${b}), #000)`;
    }
</script>

<x-layout>
    <div class="listing-div">
        <p>Shared by: {{$listing['owner_name']}}</p>
        <img id="js--img" src="{{$listing->img ? asset('storage/' . $listing->img) : asset('/images/no-image.png')}}" alt="" onload="getAverageColor()"/>
        <h1>
            {{$listing['title']}}
        </h1>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <p>
            {{$listing['description']}}
        </p>
        @auth
        @if ($listing->owner_name != auth()->user()->name && !($listing->lender_name))
            <form method="POST" action="/lend/{{$listing->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <button class="submit-button">
                Lend this item
                </button>
            </form>
        @endif
        @endauth
    </div>
    <h1 class="reviewsh1">All reviews on this item</h1>

    @unless (count($reviews) == 0)
    <div class="review-card-container">
    @foreach ($reviews as $review)
        <div class="review-card">
            <h3>Written by: {{$review['user_name']}}</h3>
            <p>{{$review['date_posted']}}</p>
            <h1>{{$review['title']}}</h1>
            <p>{{$review['description']}}</p>
        </div>
    @endforeach
    </div>

    @else
        <p>There are currently no reviews on this item listing</p>
    @endunless
</x-layout>

<style>
    body{
        min-height: 100vh;
        width: 100vw;
    }

    .reviewsh1{
        text-align: center;
        margin: 0.5rem;
    }

    .listing-div{
        width: fit-content;
        margin: 0 auto;
    }

    .listing-div h1, p{
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
    

    .review-card-container {
        margin: 1.3rem auto;
        width: 95vw;
        columns: 25rem auto;
    }
    .review-card{
        width: 25rem;
        max-width: 95vw;
        background-color: var(--bg-indent);
        padding: 0.7rem;
        border-radius: 1.4rem;
        break-inside: avoid;
        margin: 0 auto;
        margin-bottom: 0.7rem;
    }

    .review-card h1, h2, p{
        margin: 0.3rem auto;
    }
</style>
