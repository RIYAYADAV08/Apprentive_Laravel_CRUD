@extends('layout')
@section('content')<div class="card"><h1>Add Product</h1><form method="POST" action="{{ route('products.store') }}">@include('products.form',['buttonText'=>'Create Product'])</form></div>@endsection
