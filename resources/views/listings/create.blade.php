<x-layout>
    <form method="POST" action="/listings" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Item listing Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
              placeholder="Example: Green soccer shirt" value="{{old('title')}}" />
    
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
              Tags (Comma Separated)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
              placeholder="Example: Phone, Clothes, etc" value="{{old('tags')}}" />
    
            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
              Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
              placeholder="Describe the item">{{old('description')}}</textarea>
    
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
              Photo of the item
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="img" />
    
            @error('img')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
              Create Gig
            </button>
    
            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-layout>