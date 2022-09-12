@extends('admin.master')

@php
    $content = 'content_'.app()->currentLocale();
    $title = 'title_'.app()->currentLocale();
@endphp

@section('title', 'Trashed Service | ' . env('APP_NAME'))

@section('content')

    <h1>All Trashed Service</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Icon</th>
                <th>Content</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($services as $service)
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->icon }}</td>
                    <td>{!! $service->$content !!} </td>
                    <td>{{ $service->$title }} </td>
                 <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.services.restore', $service->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.services.forcedelete', $service->id) }}" method="POST">
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
