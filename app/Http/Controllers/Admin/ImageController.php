<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PortfolioDetaile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\PortfolioDetaileImage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=PortfolioDetaileImage::with('portfolioDetaile')->paginate(10);
        return view('admin.image.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detailes=PortfolioDetaile::select('id','name_en','name_ar')->get();
        return view('admin.image.create',compact('detailes'));

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
            'path'=>'required',
            'portfolio_detaile_id'=>'required |exists:portfolio_detailes,id'
        ]);
        $img_name=rand().time().$request->file('path')->getClientOriginalName();
        $request->file('path')->move(public_path('image/detaileImages'),$img_name);

        PortfolioDetaileImage::create([
            'path'=>$img_name,
            'portfolio_detaile_id'=>$request->portfolio_detaile_id,
        ]);
        return redirect()->route('admin.images.index')->
        with('msg', 'Image added successfully')->with('type', 'success');
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
        $image=PortfolioDetaileImage::find($id);
        $detailes=PortfolioDetaile::select('id','name_en','name_ar')->get();
        return view('admin.image.edit',compact('image','detailes'));
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
        $image=PortfolioDetaileImage::find($id);

        $request->validate([
            'portfolio_detaile_id'=>'required |exists:portfolio_detailes,id'
        ]);

        $img_name=$image->path;

        if($request->path){
        $img_name=rand().time().$request->file('path')->getClientOriginalName();
        $request->file('path')->move(public_path('image/detaileImages'),$img_name);
        File::delete(public_path('image/detaileImages/'.$image->path));

        }
        $image->update([
            'path'=>$img_name,
            'portfolio_detaile_id'=>$request->portfolio_detaile_id,
        ]);
        return redirect()->route('admin.images.index')->
        with('msg', 'Image Update successfully')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=PortfolioDetaileImage::find($id);
        File::delete(public_path('image/detaileImages/'.$image->path));
        $image->delete();
        return redirect()->route('admin.images.index')->
        with('msg', 'Image delete successfully')->with('type', 'success');
    }
    public function trash()
    {
        $images =PortfolioDetaileImage::onlyTrashed()->with('portfolioDetaile')->paginate(10);
        // $images=PortfolioDetaileImage::with('portfolioDetaile')->paginate(10);

        return view('admin.image.trash', compact('images'));
    }

    public function restore($id)
    {
       PortfolioDetaileImage::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.images.index')->with('msg', 'Image restored successfully')->with('type', 'warning');
    }

    public function forcedelete($id)
    {
       PortfolioDetaileImage::onlyTrashed()->find($id)->forcedelete();

        return redirect()->route('admin.images.index')->with('msg', 'Image deleted permanintly successfully')->with('type', 'danger');
    }
}
