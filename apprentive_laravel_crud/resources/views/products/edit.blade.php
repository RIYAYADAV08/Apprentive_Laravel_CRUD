@extends('layout')
@section('content')<div class="card"><h1>Edit Product</h1><form method="POST" action="{{ route('products.update',$product) }}">@method('PUT') @include('products.form',['buttonText'=>'Update Product'])</form></div>@endsection
