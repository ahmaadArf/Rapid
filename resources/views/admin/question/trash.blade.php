@extends('admin.master')

@php
$questionn = 'question_'.app()->currentLocale();
$answer = 'answer_'.app()->currentLocale();
@endphp

@section('title', 'Trashed Question | ' . env('APP_NAME'))

@section('content')

    <h1>All Trashed Question</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($questions as $question)
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->$questionn }} </td>
                    <td>{{ $question->$answer }} </td>
                 <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.questions.restore', $question->id) }}"><i class="fas fa-undo"></i></a>
                        <form class="d-inline" action="{{ route('admin.questions.forcedelete', $question->id) }}" method="POST">
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
