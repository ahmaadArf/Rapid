@extends('admin.master')

@section('title', 'Add New Testimonial | ' . env('APP_NAME'))

@section('content')

    <h1 class=" ml-4">Add new Testimonial</h1>
    @include('admin.errors')

    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
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
            <label>Arbic Comment</label>
            <textarea  name="comment_ar" placeholder="Arbic Comment" class="form-control">{{ old('comment_ar') }}</textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>English Comment</label>
            <textarea  name="comment_en" placeholder="English Comment" class="form-control">{{ old('comment_en') }}</textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success px-5 ml-4">Add</button>
    </form>

@stop
