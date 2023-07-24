@extends('template.template')

@section('title', $title)

@section('content')
    <h1 class="title">{{ $title }}</h1>

    <form action="{{ route('category.update') }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $result->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $result->name }}" autocomplete="false">
        <input class="btn-action" type="submit" value="Edit">
        <a class="btn-action" href="{{ route('category.index') }}">Cancel</a>
    </form>
@endsection