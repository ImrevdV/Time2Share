<x-layout>
  <header class="form-header">
    <h2 class="form-title">Create a listing</h2>
    <p class="form-subtitle">Create a listing to share your item</p>
  </header>
  <form method="POST" action="/listings" enctype="multipart/form-data" class="form">
      @csrf
      <div class="form-group">
          <label for="title" class="form-label">Item Listing Title</label>
          <input type="text" class="form-input" name="title" placeholder="Example: Green soccer shirt" value="{{ old('title') }}" />
          @error('title')
          <p class="error-message">{{ $message }}</p>
          @enderror
      </div>
      <div class="form-group">
          <label for="tags" class="form-label">Tags (Comma Separated)</label>
          <input type="text" class="form-input" name="tags" placeholder="Example: Phone, Clothes, etc" value="{{ old('tags') }}" />
          @error('tags')
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
          <label for="logo" class="form-label">Photo of the Item</label>
          <input type="file" class="form-input" name="img" />
          @error('img')
          <p class="error-message">{{ $message }}</p>
          @enderror
      </div>
      <div class="form-group">
          <button type="submit" class="submit-button">Create listing</button>
          <a href="/" class="back-link">Back</a>
      </div>
  </form>
</x-layout>