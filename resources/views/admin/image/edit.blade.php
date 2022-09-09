@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Edit Image | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Edit Image</h1>
    @include('admin.errors')

    <form action="{{ route('admin.images.update',$image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3 ml-4">
            <label>Path</label>
            <input type="file" name="path"class="form-control">
            <img width="80" src="{{ asset('image/detaileImages/'.$image->path) }}" alt="">
        </div>
        <div class="mb-3 ml-4">
            <label>Portfolio Detaile Id</label>
            <select name="portfolio_detaile_id" class="form-control">

                <option value="">Select</option>
                @foreach ($detailes as $item)
                    <option {{ $image->portfolio_detaile_id == $item->id ? 'selected' : '' }}  value="{{ $item->id }}">{{ $item->$name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success px-5 ml-4">Update</button>
    </form>

@stop

