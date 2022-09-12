@extends('admin.master')
@section('title', 'Edit Service | ' . env('APP_NAME'))
@section('content')

    <h1 class=" ml-4">Edit Service</h1>
    @include('admin.errors')

    <form action="{{ route('admin.services.update',$service->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3 ml-4">
            <label>English Title</label>
            <input type="text" name="title_en" placeholder="English Title" class="form-control" value="{{ $service->title_en }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Title</label>
            <input type="text" name="title_ar" placeholder="Arbic Title" class="form-control" value="{{ $service->title_ar}}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Content</label>
            <textarea id="mytextarea" name="content_en">{{ $service->content_en }}</textarea>

        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Content</label>
            <textarea id="mytextarea" name="content_ar">{{ $service->content_ar }}</textarea>

        </div>
        <div class="mb-3 ml-4">
            <label>Icon</label>
            <input type="text" name="icon" placeholder="Icon" class="form-control" value="{{ $service->icon}}">
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
