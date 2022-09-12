@extends('admin.master')
@section('title', 'Team | ' . env('APP_NAME'))

@php
    $name = 'name_'.app()->currentLocale();
    $job = 'job_'.app()->currentLocale();
@endphp
@section('content')

    <h1>All Teams</h1>
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
                <th>Job</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Twitter</th>
                <th>Linkedin</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($teams as $team)
                    <td>{{ $team->id }}</td>
                    <td>{{ $team->$name }}</td>
                    <td>{{ $team->$job }} </td>
                    <td>{{ $team->facebook }} </td>
                    <td>{{ $team->instagram }} </td>
                    <td>{{ $team->twitter }} </td>
                    <td>{{ $team->linkedin }} </td>
                    <td><img width="80" src="{{ asset('image/teams/'.$team->image) }}" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.teams.edit', $team->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.teams.destroy', $team->id) }}" method="POST">
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

