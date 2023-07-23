@extends('template.template')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('product.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $product->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" autocomplete="false">
        <br>
        <label>EAN:</label>
        <input type="text" name="ean" value="{{ $product->ean }}" autocomplete="false">
        <br>
        <label>Amount:</label>
        <input type="text" name="amount" value="{{ $product->amount }}" autocomplete="false">
        <br>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" autocomplete="false">
        <br>
        <label>Category:</label>
        <select name="category_id">
            @foreach ($category as $item)
            <option value="{{ $item->id }}" {{ $item->id === $product->category_id ? 'selected' : ''}}>{{ $item->name }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Edit">
        <a href="{{ route('product.index') }}">Cancel</a>
    </form>
@endsection