@extends('admin.master')
@section('title', 'Edit Question | ' . env('APP_NAME'))
@section('content')

    <h1 class=" ml-4">Edit Question</h1>
    @include('admin.errors')

    <form action="{{ route('admin.questions.update',$question->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3 ml-4">
            <label>English Question</label>
            <input type="text" name="question_en" placeholder="English Question" class="form-control" value="{{ $question->question_en }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Question</label>
            <input type="text" name="question_ar" placeholder="Arbic Question" class="form-control" value="{{ $question->question_ar}}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Answer</label>
            <input type="text" name="answer_en" placeholder="English Answer" class="form-control" value="{{ $question->answer_en }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Answer</label>
            <input type="text" name="answer_ar" placeholder="Arbic Answer" class="form-control" value="{{ $question->answer_ar }}">
        </div>
        <button class="btn btn-success px-5 ml-4">Update</button>
    </form>

@stop

