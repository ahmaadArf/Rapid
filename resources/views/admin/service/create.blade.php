@extends('admin.master')
@section('title', 'Add New Service | ' . env('APP_NAME'))
@section('content')

    <h1 class=" ml-4">Add new Service</h1>
    @include('admin.errors')

    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf

        <div class="mb-3 ml-4">
            <label>English Title</label>
            <input type="text" name="title_en" placeholder="English Title" class="form-control" value="{{ old('title_en') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Title</label>
            <input type="text" name="title_ar" placeholder="Arbic Title" class="form-control" value="{{ old('title_ar') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Content</label>
            {{--  <input type="text" name="content_en" placeholder="English Content" class="form-control" value="{{ old('content_en') }}">  --}}
            <textarea id="mytextarea" name="content_en">{{ old('content_en') }}</textarea>

        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Content</label>
            {{--  <input type="text" name="content_ar" placeholder="Arbic Content" class="form-control" value="{{ old('content_ar') }}">  --}}
            <textarea id="mytextarea" name="content_ar">{{ old('content_ar') }}</textarea>

        </div>
        <div class="mb-3 ml-4">
            <label>Icon</label>
            <input type="text" name="icon" placeholder="Icon" class="form-control" value="{{ old('icon') }}">
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

