<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PortfolioCategry;
use App\Http\Controllers\Controller;

class CategryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:categry-list|categry-create|categry-edit|categry-delete', ['only' => ['index','store']]);
         $this->middleware('permission:categry-create', ['only' => ['create','store']]);
         $this->middleware('permission:categry-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:categry-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categries=PortfolioCategry::paginate(10);
        return view('admin.categry.index',compact('categries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categry.create');

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

        ]);

        PortfolioCategry::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,


        ]);
        return redirect()->route('admin.categries.index')->
        with('msg', 'Categry added successfully')->with('type', 'success');
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
        $categry=PortfolioCategry::find($id);

        return view('admin.categry.edit',compact('categry'));
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
        $categry=PortfolioCategry::find($id);

        $request->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
        ]);
        $categry->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,

        ]);

        return redirect()->route('admin.categries.index')->
        with('msg', 'Categry update successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categry=PortfolioCategry::find($id);
        $categry->delete();
        return redirect()->route('admin.categries.index')->
        with('msg', 'Categry delete successfully')->with('type', 'success');
    }
    public function trash()
    {
        $categories = PortfolioCategry::onlyTrashed()->paginate(10);

        return view('admin.categry.trash', compact('categories'));
    }

    public function restore($id)
    {
        // Category::onlyTrashed()->find($id)->update(['deleted_at' => null]);
        PortfolioCategry::onlyTrashed()->find($id)->restore();

        return redirect()->route('admin.categries.index')->with('msg', 'Category restored successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
        PortfolioCategry::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('admin.categries.index')->with('msg', 'Category deleted permanintly successfully')->with('type', 'danger');
    }
}
