<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::paginate(10);
        return view('admin.question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'question_en'=>'required',
            'question_ar'=>'required',
            'answer_en'=>'required',
            'answer_ar'=>'required',
        ]);

        Question::create([
            'question_en'=>$request->question_en,
            'question_ar'=>$request->question_ar,
            'answer_en'=>$request->answer_en,
            'answer_ar'=>$request->answer_ar,
        ]);
        return redirect()->route('admin.questions.index')->
        with('msg', 'Question added successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question=Question::find($id);
        return view('admin.question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question=Question::find($id);


        $request->validate([
            'question_en'=>'required',
            'question_ar'=>'required',
            'answer_en'=>'required',
            'answer_ar'=>'required',
        ]);

        $question->update([
            'question_en'=>$request->question_en,
            'question_ar'=>$request->question_ar,
            'answer_en'=>$request->answer_en,
            'answer_ar'=>$request->answer_ar,
        ]);

        return redirect()->route('admin.questions.index')->
        with('msg', 'Question update successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Question::find($id);
        $question->delete();
        return redirect()->route('admin.questions.index')->
        with('msg', 'Question delete successfully')->with('type', 'success');
    }
    public function trash()
    {
        $questions =Question::onlyTrashed()->paginate(10);
        return view('admin.question.trash', compact('questions'));
    }

    public function restore($id)
    {
       Question::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.questions.index')->with('msg', 'Question restored successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
       Question::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('admin.questions.index')->with('msg', 'Question deleted permanintly successfully')->with('type', 'danger');
    }
}
