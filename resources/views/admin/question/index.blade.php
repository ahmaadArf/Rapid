@extends('admin.master')
@section('title', 'Question | ' . env('APP_NAME'))
@php
    $questionn = 'question_'.app()->currentLocale();
    $answer = 'answer_'.app()->currentLocale();
@endphp
@section('content')

    <h1>All Questions</h1>
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
                        <a class="btn btn-primary" href="{{ route('admin.questions.edit', $question->id) }}"><i class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.questions.destroy', $question->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop

