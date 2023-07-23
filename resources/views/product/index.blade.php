@extends('template.template')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<a href="{{ route('product.create') }}">New</a>
<a href="{{ route('home.index') }}">Home</a>
<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>EAN</td>
            <td>Amount</td>
            <td>Price</td>
            <td>Category</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($result as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->ean }}</td>
            <td>{{ $item->amount }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->category->name }}</td>
            <td>
                <a href="{{ route('product.show', $item->id) }}">Delete</a>
                <a href="{{ route('product.edit', $item->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection