@extends('template.template')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" autocomplete="false">
        <br>
        <label>EAN:</label>
        <input type="text" name="ean" autocomplete="false">
        <br>
        <label>Amount:</label>
        <input type="text" name="amount" autocomplete="false">
        <br>
        <label>Price:</label>
        <input type="text" name="price" autocomplete="false">
        <br>
        <label>Category:</label>
        <select name="category_id">
            @foreach ($result as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Save">
    </form>
@endsection