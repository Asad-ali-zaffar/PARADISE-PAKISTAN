<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourPoint;
use App\Models\City;
use Illuminate\Support\Facades\Redis;

class TourPointController extends Controller
{
    public function index()
    {
        $citydata=city::all();

        $titel="Tour Point Registeration";
        $url=url('tour_point_registeration');
        return view('frontend.tourPoint_registeration')->with(compact('titel','url','citydata'));
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $data = [];
        if ($request->hasFile('tour_point_img')) {
            foreach ($request->file('tour_point_img') as $file) {
                $image_name = time() . rand(10, 1500) . '.' . $file->getClientOriginalExtension();
                $distentionpath = public_path('/tour_point_img');
                $file->move($distentionpath, $image_name);
                $data[] = $image_name;
            }
        }
        $TourPoint=new TourPoint;
        $TourPoint->tour_point_name=$request['tour_point_name'];
        $TourPoint->tour_point_cityID=$request['destination_place_name'];
        $TourPoint->tour_point_address=$request['tour_point_address'];
        $TourPoint->tour_point_history=$request['tour_point_history'];
        $TourPoint->tour_point_img= implode(',', $data);
        $TourPoint->save();
        return redirect('/tour_point_view');

    }
    public function show(){
        $TourPoint=TourPoint::paginate(100);
        $titel="Tour Point view";
        return view('frontend.tour_point_view')->with(compact('TourPoint','titel'));
    }
    public function edit($id)
    {
        $TourPoint=TourPoint::where('tour_point_id',$id)->get();
        if(is_null($TourPoint))
        {
            return redirect('/tour_point_view');
        }
        else
        {
            $titel="update Tour Point data";
            $url=url('tour_point_update'."/".$id);
            // echo "halo";
            // die;
            $citydata=city::all();
            return view('frontend.tour_point_update')->with(compact('titel','url','TourPoint','citydata'));
        }
    }
    public function update(Request $request,$id)
    {
        $data = [];
        if ($request->hasFile('tour_point_img')) {
            foreach ($request->file('tour_point_img') as $file) {
                $image_name = time() . rand(10, 1500) . '.' . $file->getClientOriginalExtension();
                $distentionpath = public_path('/tour_point_img');
                $file->move($distentionpath, $image_name);
                $data[] = $image_name;
            }
        }
        TourPoint::where('tour_point_id',$id)
        ->update([
            'tour_point_name'=>$request->input('tour_point_name'),
            'tour_point_cityID'=>$request->input('destination_place_name'),
            'tour_point_address'=>$request->input('tour_point_address'),
            'tour_point_history'=>$request->input('tour_point_history'),
            'tour_point_img'=>implode(',', $data)

        ]);
        return redirect('/tour_point_view');
    }
    public function delete($id)
    {
        TourPoint::where('tour_point_id',$id)->delete();
        return redirect()->back();
    }
}
