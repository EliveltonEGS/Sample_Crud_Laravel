@extends('template.template')

@section('title', $title)

@section('content')
    <h1 class="title">{{ $title }}</h1>

    <form action="{{ route('product.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $product->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" autocomplete="false">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>EAN:</label>
        <input type="text" name="ean" value="{{ $product->ean }}" autocomplete="false">
        @error('ean')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Amount:</label>
        <input type="text" name="amount" value="{{ $product->amount }}" autocomplete="false">
        @error('amount')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" autocomplete="false">
        @error('price')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Category:</label>
        <select name="category_id">
            @foreach ($category as $item)
            <option value="{{ $item->id }}" {{ $item->id === $product->category_id ? 'selected' : ''}}>{{ $item->name }}</option>
            @endforeach
        </select>
        <br>
        <input class="btn-action" type="submit" value="Edit">
        <a class="btn-action" href="{{ route('product.index') }}">Cancel</a>
    </form>
@endsection