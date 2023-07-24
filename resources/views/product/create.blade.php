@extends('template.template')

@section('title', $title)

@section('content')
    <h1 class="title">{{ $title }}</h1>

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" autocomplete="false">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>EAN:</label>
        <input type="text" name="ean" autocomplete="false">
        @error('ean')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Amount:</label>
        <input type="text" name="amount" autocomplete="false">
        @error('amount')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Price:</label>
        <input type="text" name="price" autocomplete="false">
        @error('price')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <label>Category:</label>
        <select name="category_id">
            @foreach ($result as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input class="btn-action" type="submit" value="Save">
        <a class="btn-action" href="{{ route('product.index') }}">Cancel</a>
    </form>
@endsection