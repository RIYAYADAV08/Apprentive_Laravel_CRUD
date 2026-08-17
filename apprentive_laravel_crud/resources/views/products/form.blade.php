@csrf
<label>Name</label><input name="name" value="{{ old('name', $product->name ?? '') }}" required>@error('name')<div class="error">{{ $message }}</div>@enderror
<label>Description</label><textarea name="description">{{ old('description', $product->description ?? '') }}</textarea>@error('description')<div class="error">{{ $message }}</div>@enderror
<label>Price</label><input type="number" step="0.01" min="0" name="price" value="{{ old('price', $product->price ?? '') }}" required>@error('price')<div class="error">{{ $message }}</div>@enderror
<label>Quantity</label><input type="number" min="0" name="quantity" value="{{ old('quantity', $product->quantity ?? 0) }}" required>@error('quantity')<div class="error">{{ $message }}</div>@enderror
<br><button class="btn primary">{{ $buttonText }}</button> <a class="btn secondary" href="{{ route('products.index') }}">Cancel</a>
