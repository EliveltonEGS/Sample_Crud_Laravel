@extends('template.template')

@section('title', $title)

@section('content')
    <h1 class="title">{{ $title }}</h1>

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" autocomplete="false">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <input class="btn-action" type="submit" value="Save">
        <a class="btn-action" href="{{ route('category.index') }}">Cancel</a>
    </form>
@endsection