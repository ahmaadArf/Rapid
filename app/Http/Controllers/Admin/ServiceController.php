<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::paginate(10);
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');

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
            'content_en'=>'required',
            'content_ar'=>'required',
            'title_en'=>'required',
            'title_ar'=>'required',
            'icon'=>'required'
        ]);

        Service::create([
            'content_en'=>$request->content_en,
            'content_ar'=>$request->content_ar,
            'title_en'=>$request->title_en,
            'title_ar'=>$request->title_ar,
            'icon'=>$request->icon
        ]);
        return redirect()->route('admin.services.index')->
        with('msg', 'Service added successfully')->with('type', 'success');
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
        $service=Service::find($id);
        return view('admin.service.edit',compact('service'));
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
        $service=Service::find($id);


        $request->validate([
            'content_en'=>'required',
            'content_ar'=>'required',
            'title_en'=>'required',
            'title_ar'=>'required',
            'icon'=>'required'
        ]);

        $service->update([
            'content_en'=>$request->content_en,
            'content_ar'=>$request->content_ar,
            'title_en'=>$request->title_en,
            'title_ar'=>$request->title_ar,
            'icon'=>$request->icon
        ]);

        return redirect()->route('admin.services.index')->
        with('msg', 'Service update successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect()->route('admin.services.index')->
        with('msg', 'Service delete successfully')->with('type', 'success');
    }
    public function trash()
    {
        $services =Service::onlyTrashed()->paginate(10);
        return view('admin.service.trash', compact('services'));
    }

    public function restore($id)
    {
       Service::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.services.index')->with('msg', 'Service restored successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
       Service::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('admin.services.index')->with('msg', 'Service deleted permanintly successfully')->with('type', 'danger');
    }
}
