@extends('admin.master')

@php
    $name = 'name_'.app()->currentLocale();
    $job = 'job_'.app()->currentLocale();
    $comment = 'comment_'.app()->currentLocale();
@endphp

@section('title', 'Trashed Testimonial | ' . env('APP_NAME'))

@section('content')

    <h1>All Trashed Testimonial</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job</th>
                <th>Commet</th>
                {{--  <th>Image</th>  --}}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($testimonials as $testimonial)
                <td>{{ $testimonial->id }}</td>
                <td>{{ $testimonial->$name }}</td>
                <td>{{ $testimonial->$job }} </td>
                <td>{{ $testimonial->$comment }} </td>
                 <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.testimonials.restore', $testimonial->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.testimonials.forcedelete', $testimonial->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-times"></i></button>
                        </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
