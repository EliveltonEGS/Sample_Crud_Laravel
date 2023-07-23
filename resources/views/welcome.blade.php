@extends('template.template')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>

    <a href="{{ route('category.index') }}">Categories</a>
    <a href="{{ route('product.index') }}">Products</a>
@endsection