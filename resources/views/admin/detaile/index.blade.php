@extends('admin.master')
@section('title', 'Detaile | ' . env('APP_NAME'))

@php
    $name = 'name_'.app()->currentLocale();
    $description = 'description_'.app()->currentLocale();
@endphp
@section('content')

    <h1>All Detailes</h1>
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
                <th>Description</th>
                <th>Project URL</th>
                <th>Project Date</th>
                <th>Client </th>
                <th>Portfolio Categry </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($detailes as $detaile)
                    <td>{{ $detaile->id }}</td>
                    <td>{{ $detaile->$name }} </td>
                    <td>{!! $detaile->$description !!} </td>
                    <td>{{ $detaile->project_URL }} </td>
                    <td>{{ $detaile->project_Date }} </td>
                    <td>{{ $detaile->client->$name}} </td>
                    <td>{{ $detaile->PortfolioCategry->$name }} </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.detailes.edit', $detaile->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.detailes.destroy', $detaile->id) }}" method="POST">
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

