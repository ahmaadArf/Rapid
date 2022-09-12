@extends('admin.master')

@section('title', 'Add New Team | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Add new Team</h1>
    @include('admin.errors')

    <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
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
            <label>English Job</label>
            <input type="text" name="job_en" placeholder="English Job" class="form-control" value="{{ old('job_en') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Job</label>
            <input type="text" name="job_ar" placeholder="Arbic Job" class="form-control" value="{{ old('job_ar') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Facebook</label>
            <input type="text" name="facebook" placeholder="Facebook" class="form-control" value="{{ old('facebook') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Instagram</label>
            <input type="text" name="instagram" placeholder="Instagram" class="form-control" value="{{ old('instagram') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Twitter</label>
            <input type="text" name="twitter" placeholder="Twitter" class="form-control" value="{{ old('twitter') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Linkedin</label>
            <input type="text" name="linkedin" placeholder="Linkedin" class="form-control" value="{{ old('linkedin') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success px-5 ml-4">Add</button>
    </form>

@stop
