@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
    $description = 'description_'.app()->currentLocale();

@endphp

@section('title', 'Trashed Detailes | ' . env('APP_NAME'))

@section('content')

    <h1>All Trashed Detailes</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Path</th>
                <th>Portfolio Detaile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($images as $image)
                <td>{{ $image->id }}</td>
                <td><img width="80" src="{{ asset('image/detaileImages/'.$image->path) }}" alt=""></td>
                <td>{{ $image->portfolioDetaile->$name }} </td>
                 <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.images.restore', $image->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.images.forcedelete', $image->id) }}" method="POST">
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
