@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Add New Categry | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Add new Categry</h1>
    @include('admin.errors')

    <form action="{{ route('admin.categries.store') }}" method="POST" ">
        @csrf

        <div class="mb-3 ml-4">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ old('name_en') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Name</label>
            <input type="text" name="name_ar" placeholder="Arbic Name" class="form-control" value="{{ old('name_ar') }}">
        </div>

        <button class="btn btn-success px-5 ml-4">Add</button>
    </form>

@stop
