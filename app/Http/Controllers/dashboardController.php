<?php

namespace App\Http\Controllers;

use App\Models\jod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{

    public function creejob(Request $request){


        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        $job= new jod();
        $job->job=$request->job;
        $job->image=$imageName;

        $job->save();
        return back();


    }

    public function home(){
        $job=jod::all();
        return view('home',compact("job"));

    }
    public function show($id){
        $ouvrier = DB::table('profiles')
        ->join('ouvriers', 'ouvriers.id',  '=', 'profiles.ouvrier_id')
        ->where('profiles.jod_id', $id)
        ->get();

        return view('show' ,compact('ouvrier'));
    }
}
