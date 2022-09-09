@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Edit Cateqry | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Edit Cateqry</h1>
    @include('admin.errors')

    <form action="{{ route('admin.categries.update',$categry->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3 ml-4">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ $categry->name_en}}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Name</label>
            <input type="text" name="name_ar" placeholder="Arbic Name" class="form-control" value="{{$categry->name_ar}}">
        </div>

        <button class="btn btn-success px-5 ml-4">Update</button>
    </form>

@stop
