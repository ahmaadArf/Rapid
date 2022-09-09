@extends('admin.master')
@section('title', 'Categry | ' . env('APP_NAME'))

@php
    $name = 'name_'.app()->currentLocale();
@endphp
@section('content')

    <h1>All Categries</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($categries as $categry)
                    <td>{{ $categry->id }}</td>
                    <td>{{ $categry->$name }} </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.categries.edit', $categry->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.categries.destroy', $categry->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

