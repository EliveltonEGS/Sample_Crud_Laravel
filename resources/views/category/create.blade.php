@extends('template.template')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" autocomplete="false">
        <input type="submit" value="Save">
    </form>
@endsection