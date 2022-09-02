<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourPakages;
use App\Models\TourPoint;

class TourPakagesController extends Controller
{
    public function index()
    {
        $url=url('new_pakages_create');
        $titel="New Tour Pakages create";
        return view('frontend.tour_pakages_create')->with(compact('url','titel'));
    }
    public function store(Request $request)
    {

        $tourpakage= new TourPakages;
        $tourpakage->pakage_name=$request['pakage_name'];
        $tourpakage->pakage_dayes=$request['pakage_dayes'];
        $tourpakage->pakage_price=$request['pakage_price'];
        $tourpakage->pakage_description=$request['pakage_services'];
        if($request->hasFile('Pakage_img'))
        {
            // $request->validate(['Pakage_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('Pakage_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $tourpakage->pakage_img=$teaser_image;
        }
        $tourpakage->save();
        return redirect('tour_pakage_view');
    }
    public function show()
    {
        $tourpakage=TourPakages::paginate(100);
        $titel="All pakages";
        return view('frontend.tour_pakage_view')->with(compact('tourpakage','titel'));
    }

    public function edit($id)
    {
        $tourpakage=TourPakages::where('tour_pakage_id',$id)->get();
        if(is_null($tourpakage))
        {
            return redirect('tour_pakage_view');
        }
        else
        {
            $titel="Edit pakage Detailes";
            $url=url('update_pakage_detailes'."/".$id);
            return view('frontend.tour_pakage_update')->with(compact('titel','url','tourpakage'));

        }
    }
    public function update($id,Request $request)

    {
        $img="";
        if($request->hasFile('Pakage_img'))
        {
            // $request->validate(['Pakage_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('Pakage_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $img=$teaser_image;
        }
        TourPakages::where('tour_pakage_id',$id)
        ->update([
            'pakage_name'=>$request->input('pakage_name'),
            'pakage_dayes'=>$request->input('pakage_dayes'),
            'pakage_price'=>$request->input('pakage_price'),
            'pakage_description'=>$request->input('pakage_services'),
            'pakage_img'=>$img
        ]);
        return redirect('tour_pakage_view');
    }
    public function delete($id)
    {
        TourPakages::where('tour_pakage_id',$id)->delete();
        return redirect()->back();
    }
}

