@extends('layout')
@section('content')
<div class="card">
<div style="display:flex;justify-content:space-between;align-items:center"><h1>Products</h1><a class="btn primary" href="{{ route('products.create') }}">+ Add Product</a></div>
@if(session('success'))<div class="alert">{{ session('success') }}</div>@endif
@if($products->count())
<table><thead><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Actions</th></tr></thead><tbody>
@foreach($products as $product)<tr><td>{{ $product->name }}</td><td>₹{{ number_format((float)$product->price,2) }}</td><td>{{ $product->quantity }}</td><td><div class="actions"><a class="btn secondary" href="{{ route('products.show',$product) }}">View</a><a class="btn secondary" href="{{ route('products.edit',$product) }}">Edit</a><form method="POST" action="{{ route('products.destroy',$product) }}" onsubmit="return confirm('Delete this product?')">@csrf @method('DELETE')<button class="btn danger">Delete</button></form></div></td></tr>@endforeach
</tbody></table><div class="pagination">{{ $products->links() }}</div>
@else<p class="muted">No products yet. Add your first product.</p>@endif
</div>
@endsection
