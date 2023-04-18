<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\PortfolioCategry;
use App\Models\PortfolioDetaile;
use Illuminate\Http\Request;

class DetaileController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:detaile-list|detaile-create|detaile-edit|detaile-delete', ['only' => ['index','store']]);
         $this->middleware('permission:detaile-create', ['only' => ['create','store']]);
         $this->middleware('permission:detaile-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:detaile-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailes=PortfolioDetaile::with('PortfolioCategry','client')->paginate(10);
        return view('admin.detaile.index',compact('detailes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Client::select('id','name_ar','name_en')->get();
        $categries=PortfolioCategry::select('id','name_ar','name_en')->get();

        return view('admin.detaile.create',compact('clients','categries'));

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
            'description_en'=>'required',
            'description_ar'=>'required',
            'project_Date'=>'required',
            'project_URL'=>'required',
            'client_id'=>'required | exists:clients,id',
            'categry_id'=>'required | exists:portfolio_categries,id'


        ]);

        PortfolioDetaile::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'description_en'=>$request->description_en,
            'description_ar'=>$request->description_ar,
            'project_Date'=>$request->project_Date,
            'project_URL'=>$request->project_URL,
            'client_id'=>$request->client_id,
            'portfolio_categry_id'=>$request->categry_id


        ]);
        return redirect()->route('admin.detailes.index')->
        with('msg', 'Detaile added successfully')->with('type', 'success');
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
        $detaile=PortfolioDetaile::find($id);
        $clients=Client::select('id','name_ar','name_en')->get();
        $categries=PortfolioCategry::select('id','name_ar','name_en')->get();
        return view('admin.detaile.edit',compact('detaile','clients','categries'));
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
        $detaile=PortfolioDetaile::find($id);

        $request->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'description_en'=>'required',
            'description_ar'=>'required',
            'project_Date'=>'required',
            'project_URL'=>'required',
            'client_id'=>'required | exists:clients,id',
            'categry_id'=>'required | exists:portfolio_categries,id'


        ]);
        $detaile->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'description_en'=>$request->description_en,
            'description_ar'=>$request->description_ar,
            'project_Date'=>$request->project_Date,
            'project_URL'=>$request->project_URL,
            'client_id'=>$request->client_id,
            'portfolio_categry_id'=>$request->categry_id

        ]);

        return redirect()->route('admin.detailes.index')->
        with('msg', 'Detaile update successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detaile=PortfolioDetaile::find($id);
        $detaile->delete();
        return redirect()->route('admin.detailes.index')->
        with('msg', 'Detaile delete successfully')->with('type', 'success');
    }
    public function trash()
    {
        $detailes = PortfolioDetaile::onlyTrashed()->paginate(10);

        return view('admin.detaile.trash', compact('detailes'));
    }

    public function restore($id)
    {
        PortfolioDetaile::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.detailes.index')->with('msg', 'Detaile restored successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
        PortfolioDetaile::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('admin.detailes.index')->with('msg', 'Detaile deleted permanintly successfully')->with('type', 'danger');
    }
}
