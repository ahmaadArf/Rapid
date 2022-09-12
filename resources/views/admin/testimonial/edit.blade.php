@extends('admin.master')
@section('title', 'Edit Testimonial | ' . env('APP_NAME'))
@section('content')

    <h1 class=" ml-4">Edit Testimonial</h1>
    @include('admin.errors')

    <form action="{{ route('admin.testimonials.update',$testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3 ml-4">
            <label>English Name</label>
            <input type="text" name="name_en" placeholder="English Name" class="form-control" value="{{ $testimonial->name_en }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Name</label>
            <input type="text" name="name_ar" placeholder="Arbic Name" class="form-control" value="{{ $testimonial->name_ar }}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Job</label>
            <input type="text" name="job_en" placeholder="English Job" class="form-control" value="{{ $testimonial->job_en }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Job</label>
            <input type="text" name="job_ar" placeholder="Arbic Job" class="form-control" value="{{ $testimonial->job_ar }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Comment</label>
            <textarea  name="comment_ar" placeholder="Arbic Comment" class="form-control">{{ $testimonial->comment_ar }}</textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>English Comment</label>
            <textarea  name="comment_en" placeholder="English Comment" class="form-control">{{ $testimonial->comment_en }}</textarea>
        </div>
        <div class="mb-3 ml-4">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <img width="80" src="{{ asset('image/testimonials/'.$testimonial->image) }}" alt="">
        </div>
        <button class="btn btn-success px-5 ml-4">Update</button>
    </form>

@stop
