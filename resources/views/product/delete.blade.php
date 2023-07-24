@extends('template.template')

@section('title', $title)

@section('content')
    <h1 class="title">{{ $title }}</h1>

    <form action="{{ route('product.delete') }}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $product->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" autocomplete="false" disabled>
        <br>
        <label>EAN:</label>
        <input type="text" name="ean" value="{{ $product->ean }}" autocomplete="false" disabled>
        <br>
        <label>Amount:</label>
        <input type="text" name="amount" value="{{ $product->amount }}" autocomplete="false" disabled>
        <br>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" autocomplete="false" disabled>
        <br>
        <label>Category:</label>
        <select name="category_id" disabled>
            @foreach ($category as $item)
            <option value="{{ $item->id }}" {{ $item->id === $product->category_id ? 'selected' : ''}}>{{ $item->name }}</option>
            @endforeach
        </select>
        <br>
        <input class="btn-action" type="submit" value="Delete">
        <a class="btn-action" href="{{ route('product.index') }}">Cancel</a>
    </form>
@endsection