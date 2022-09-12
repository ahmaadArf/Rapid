@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Trashed Categories | ' . env('APP_NAME'))

@section('content')

    <h1>All Trashed Categories</h1>
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
                @foreach ($categories as $categry)
                <td>{{ $categry->id }}</td>
                <td>{{ $categry->$name }} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.categries.restore', $categry->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.categries.forcedelete', $categry->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-times"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
