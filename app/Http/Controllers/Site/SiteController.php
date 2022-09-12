<?php

namespace App\Http\Controllers\Site;

use App\Models\Team;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PortfolioCategry;
use App\Models\PortfolioDetaile;
use App\Http\Controllers\Controller;
use App\Mail\contact;
use App\Models\Client;
use App\Models\Question;
use App\Rules\WordCount;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Template\Template;
use Symfony\Component\HttpKernel\Profiler\Profile;

class SiteController extends Controller
{
    public function index()
    {
        $services=Service::paginate(10);
        $categries=PortfolioCategry::all();
        $detailes=PortfolioDetaile::with('PortfolioCategry','PortfolioDetaileImages')->paginate(1000);
        $testimonials=Testimonial::paginate(10);
        $teams=Team::paginate(4);
        $clinets=Client::all();
        $questions=Question::all();
        return view('site.index',compact('questions','clinets','services','detailes','categries','testimonials','teams'));
    }
    public function portfolio_details($ca,$id)
    {
        $detaile=PortfolioDetaile::with('PortfolioCategry','PortfolioDetaileImages')->find($id);
        return view('site.portfolio-details',compact('detaile'));
    }
    public function contact(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>['required',new WordCount(5)]
        ]);
         $data=$request->except('_token');
         Mail::to('Admin@gmail')->send(new contact($data));


    }
}
