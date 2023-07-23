@extends('template.template')

@section('title', 'Category Create')

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('category.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $result->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $result->name }}" autocomplete="false">
        <input type="submit" value="Edit">
    </form>
@endsection