<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::paginate(10);
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');

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
            'name_ar'=>'required',
            'name_en'=>'required',
            'job_en'=>'required',
            'job_ar'=>'required',
            'comment_en'=>'required',
            'comment_ar'=>'required',
            'image'=>'required'
        ]);
        $img_name=rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('image/testimonials'),$img_name);

        Testimonial::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'job_en'=>$request->job_en,
            'job_ar'=>$request->job_ar,
            'comment_en'=>$request->comment_en,
            'comment_ar'=>$request->comment_ar,
            'image'=>$img_name

        ]);
        return redirect()->route('admin.testimonials.index')->
        with('msg', 'Testimonial added successfully')->with('type', 'success');
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
        $testimonial=Testimonial::find($id);

        return view('admin.testimonial.edit',compact('testimonial'));
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
        $testimonial=Testimonial::find($id);
        $request->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'job_en'=>'required',
            'job_ar'=>'required',
            'comment_en'=>'required',
            'comment_ar'=>'required',

        ]);
        $img_name=$testimonial->image;

        if($request->image){
        $img_name=rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('image/testimonials'),$img_name);
        File::delete(public_path('image/testimonials/'.$testimonial->image));

        }

        $testimonial->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'job_en'=>$request->job_en,
            'job_ar'=>$request->job_ar,
            'comment_en'=>$request->comment_en,
            'comment_ar'=>$request->comment_ar,
            'image'=>$img_name
        ]);

        return redirect()->route('admin.testimonials.index')->
        with('msg', 'Testimonial update successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        File::delete(public_path('image/testimonials/'.$testimonial->image));
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->
        with('msg', 'Testimonial delete successfully')->with('type', 'success');
    }
    public function trash()
    {
        $testimonials =Testimonial::onlyTrashed()->paginate(10);
        return view('admin.testimonial.trash', compact('testimonials'));
    }

    public function restore($id)
    {
       Testimonial::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial restored successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
       Testimonial::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial deleted permanintly successfully')->with('type', 'danger');
    }
}
