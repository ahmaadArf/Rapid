@extends('admin.master')
@section('title', 'Add New Question | ' . env('APP_NAME'))
@section('content')

    <h1 class=" ml-4">Add new Question</h1>
    @include('admin.errors')

    <form action="{{ route('admin.questions.store') }}" method="POST">
        @csrf

        <div class="mb-3 ml-4">
            <label>English Question</label>
            <input type="text" name="question_en" placeholder="English Question" class="form-control" value="{{ old('question_en') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Question</label>
            <input type="text" name="question_ar" placeholder="Arbic Question" class="form-control" value="{{ old('question_ar') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>English Answer</label>
            <input type="text" name="answer_en" placeholder="English Answer" class="form-control" value="{{ old('answer_en') }}">
        </div>
        <div class="mb-3 ml-4">
            <label>Arbic Answer</label>
            <input type="text" name="answer_ar" placeholder="Arbic Answer" class="form-control" value="{{ old('answer_ar') }}">
        </div>


        <button class="btn btn-success px-5 ml-4">Add</button>
    </form>

@stop
