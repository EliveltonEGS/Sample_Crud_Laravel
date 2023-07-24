@extends('template.template')

@section('title', $title)

@section('content')
    <h1 class="title">{{ $title }}</h1>

    <form action="{{ route('category.delete') }}" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $result->id }}">
        <label>Name:</label>
        <input type="text" name="name" value="{{ $result->name }}" autocomplete="false" readonly>
        <input class="btn-action" type="submit" value="Delete">
        <a class="btn-action" href="{{ route('category.index') }}">Cancel</a>
    </form>
@endsection