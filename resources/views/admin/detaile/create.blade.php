@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Add New Detaile | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Add new Detaile</h1>
    @include('admin.errors')

    <form action="{{ route('admin.detailes.store') }}" method="POST">
        @csrf

        <div class="mb-3 ml-4">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ old('name_en') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Name</label>
            <input type="text" name="name_ar" placeholder="Arbic Name" class="form-control" value="{{ old('name_ar') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Description</label>
            <textarea id="mytextarea" name="description_en"></textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Description</label>
            <textarea id="mytextarea" name="description_ar"></textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>Project Date</label>
            <input type="date" name="project_Date" class="form-control" value="{{ old('project_Date') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Project URL</label>
            <input type="url" name="project_URL"  class="form-control" value="{{ old('project_URL') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Client Id</label>
            <select name="client_id" class="form-control">

                <option value="">Select</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->$name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 ml-4">
            <label>Portfolio Categry Id</label>
            <select name="categry_id" class="form-control">

                <option value="">Select</option>
                @foreach ($categries as $categry)
                    <option value="{{ $categry->id }}">{{ $categry->$name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success px-5 ml-4">Add</button>
    </form>

@stop
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.1.2/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
</script>
@stop
