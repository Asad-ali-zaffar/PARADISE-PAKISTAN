<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\HealthCareCenter;
use App\Models\City;


class HealthCareCenterController extends Controller
{
    public function index()
    {
        $cityData = City::all();
        $titel = "Health Care Center Registeration";
        $url = url('HealthCareCenter');
        return view('frontend.health_care_center')->with(compact('titel', 'url', 'cityData'));
    }
    public function store(Request $request)

    {
        // echo"<pre>";
        // print_r($request->all());
        // die;
        $Health = new HealthCareCenter;
        $Health->health_care_center_name = $request['health_care_center_name'];
        $Health->health_care_center_address = $request['health_care_center_address'];
        $Health->health_care_center_cityID = $request['health_care_center_cityID'];
        $Health->health_care_discription = $request['health_care_discription'];
        if($request->hasFile('health_care_center_img'))
        {
            $file=$request->file('health_care_center_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $Health->health_care_center_img=$teaser_image;
        }

        $Health->save();
        return redirect('HealthCareCenter-view');
    }

    public function show()
    {
        $Health = HealthCareCenter::paginate(100);
        $titel = "Health Care Center Pakistan";
        return view('frontend.HealthCareCenter-view')->with(compact('Health','titel'));
    }
    public function edit($id)
    {
        $Health = HealthCareCenter::where('care_center_Id',$id)->get();
        if(is_null($Health))
        {
            return redirect('HealthCareCenter-view');
        }
        else
        {
            $cityData = City::all();
            $titel="Edit Health Care Center Details";
            $url=url('health_care_center-update'."/".$id);
            return view('frontend.health_care_center-edit')->with(compact('titel','url','Health','cityData'));
        }
    }
    public function update(Request $request, $id)
    {
        $heal="";
        if($request->hasFile('health_care_center_img'))
        {
            $file=$request->file('health_care_center_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $heal=$teaser_image;
        }
        

        HealthCareCenter::where('care_center_Id',$id)
        ->update([
            'health_care_center_name'=>$request->input('health_care_center_name'),
            'health_care_center_address'=>$request->input('health_care_center_address'),
            'health_care_center_cityID'=>$request->input('health_care_center_cityID'),
            'health_care_discription'=>$request->input('health_care_discription'),
            'health_care_center_img'=>$heal
        ]);
        return redirect('HealthCareCenter-view');
    }
    public function delete($id)
    {
        HealthCareCenter::where('care_center_Id',$id)
        ->delete();
        return redirect()->back();

    }
}
