@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Add New Iamge | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Add new Iamge</h1>
    @include('admin.errors')

    <form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 ml-4">
            <label>Path</label>
            <input type="file" name="path"class="form-control">
        </div>
        <div class="mb-3 ml-4">
            <label>Portfolio Detaile Id</label>
            <select name="portfolio_detaile_id" class="form-control">

                <option value="">Select</option>
                @foreach ($detailes as $detaile)
                    <option value="{{ $detaile->id }}">{{ $detaile->$name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success px-5 ml-4">Add</button>
    </form>

@stop

