@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
@endphp

@section('title', 'Edit Detaile | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Edit Detaile</h1>
    @include('admin.errors')

    <form action="{{ route('admin.detailes.update',$detaile->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3 ml-4">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ $detaile->name_en}}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Name</label>
            <input type="text" name="name_ar" placeholder="Arbic Name" class="form-control" value="{{$detaile->name_ar}}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Description</label>
            <textarea id="mytextarea" name="description_en">{{ $detaile->description_ar }}</textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Description</label>
            <textarea id="mytextarea" name="description_ar">{{ $detaile->description_ar }}</textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>Project Date</label>
            <input type="date" name="project_Date" class="form-control" value="{{ $detaile->project_Date }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Project URL</label>
            <input type="url" name="project_URL"  class="form-control" value="{{ $detaile->project_URL }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Client Id</label>
            <select name="client_id" class="form-control">

                <option value="">Select</option>
                @foreach ($clients as $item)
                    <option {{ $detaile->client_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->$name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 ml-4">
            <label>Portfolio Categry Id</label>

            <select name="categry_id" class="form-control">

                <option value="">Select</option>
                @foreach ($categries as $item)
                    <option {{ $detaile->portfolio_categry_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->$name }}</option>
                @endforeach
            </select>

        </div>

        <button class="btn btn-success px-5 ml-4">Update</button>
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
