@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
    $job = 'job_'.app()->currentLocale();
@endphp

@section('title', 'Trashed Team | ' . env('APP_NAME'))

@section('content')

    <h1>All Trashed Team</h1>
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
                {{--  <th>Image</th>  --}}
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
                 <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.teams.restore', $team->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.teams.forcedelete', $team->id) }}" method="POST">
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
