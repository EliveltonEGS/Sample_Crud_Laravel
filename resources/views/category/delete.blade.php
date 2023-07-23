@extends('template.template')

@section('title', 'Category Create')

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('category.delete') }}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $result->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $result->name }}" autocomplete="false" readonly>
        <input type="submit" value="Delete">
    </form>
@endsection