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
</x-layout>

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
        display: block;
        margin: 0 auto;
    }
</style>
