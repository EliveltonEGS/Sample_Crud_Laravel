@extends('template.template')

@section('title', $title)

@section('content')
<h1 class="title">{{ $title }}</h1>

    <div class="bts-navigation">
        <a href="{{ route('category.create') }}">New</a>
        <a href="{{ route('home.index') }}">Home</a>
    </div>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('category.show', $item->id) }}">Delete</a>
                    <a href="{{ route('category.edit', $item->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection