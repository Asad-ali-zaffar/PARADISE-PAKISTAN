<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\TourPoint;
use App\Models\GuiderRegistrationModel;
use App\Models\Tbl_local_rooms;
use App\Models\Tbl_Hotel;
use App\Models\HealthCareCenter;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $TourPoint=TourPoint::paginate(100);
        $guider=GuiderRegistrationModel::paginate(100);
        $Local=Tbl_local_rooms::paginate(100);
        $Tbl_Hotel=Tbl_Hotel::paginate(100);
        $Health=HealthCareCenter::paginate(100);
        $url=url('City_register');
        $titel="City Registration";
        return view('frontend.city_registration')->with(compact('titel','url','TourPoint','guider','Local','Tbl_Hotel','Health'));
    }
    public function store(Request $request)
    {

        $City=new City;
        $City->city_name=$request['city_name'];
        $City->city_tourPointsID=$request['city_tourPointsID'];
        $City->city_tour_guiderID=$request['city_tour_guiderID'];
        $City->city_local_roomID=$request['city_local_roomID'];
        $City->city_hotelID=$request['city_hotelID'];
        $City->city_ceare_centersID=$request['city_ceare_centersID'];
        if($request->hasFile('city_image'))
        {
            $file=$request->file('city_image');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $City->city_image=$teaser_image;
        }
        $City->city_history=$request['city_history'];
        $City->save();
        return redirect('City_view');
    }//search_point
    public function search_point(Request $request){
        $search=$request['search_input'] ?? "";
        if($search != "")
        {
            $TourPoint=TourPoint::where('tour_point_name','LIKE',"%$search%")->get();
        }
        else
        {
            $TourPoint=TourPoint::paginate(100);
        }
        $City=City::paginate(100);
        $tourPointid="";
        $tour_guiderid="";
        $local_roomid="";
        $hotel_id="";
        $ceare_center_id="";
        foreach($City as $Cityes){
            $tourPointid=$Cityes->city_tourPointsID;
            $tour_guiderid=$Cityes->city_tourPointsID;
            $local_roomid=$Cityes->city_tourPointsID;
            $hotel_id=$Cityes->city_tourPointsID;
            $ceare_center_id=$Cityes->city_tourPointsID;
        }
        $TourPoint=TourPoint::where('tour_point_id',$tourPointid)->get();
        $guider=GuiderRegistrationModel::where('guider_id',$tour_guiderid)->get();
        $Local=Tbl_local_rooms::where('room_id',$local_roomid)->get();
        $Tbl_Hotel=Tbl_Hotel::where('hotel_id',$hotel_id)->get();
        $Health=HealthCareCenter::where('care_center_Id',$ceare_center_id)->get();
        $TourPointes=TourPoint::paginate(100);
        $titel="Citys of Pakistan";
        return view('frontend.Searching_result')->with(compact('TourPoint','search','titel','TourPointes','City','Health','Tbl_Hotel','Local','guider'));
    }
    public function search(Request $request)
    {
        $search=$request['search_input'] ?? "";
        if($search != "")
        {
            $City=City::where('city_name','LIKE',"%$search%")->get();
        }
        else
        {
            $City=City::paginate(100);
        }
        $tourPointid="";
        $tour_guiderid="";
        $local_roomid="";
        $hotel_id="";
        $ceare_center_id="";
        foreach($City as $Cityes){
            $tourPointid=$Cityes->city_tourPointsID;
            $tour_guiderid=$Cityes->city_tourPointsID;
            $local_roomid=$Cityes->city_tourPointsID;
            $hotel_id=$Cityes->city_tourPointsID;
            $ceare_center_id=$Cityes->city_tourPointsID;
        }
        $TourPoint=TourPoint::where('tour_point_id',$tourPointid)->get();
        $guider=GuiderRegistrationModel::where('guider_id',$tour_guiderid)->get();
        $Local=Tbl_local_rooms::where('room_id',$local_roomid)->get();
        $Tbl_Hotel=Tbl_Hotel::where('hotel_id',$hotel_id)->get();
        $Health=HealthCareCenter::where('care_center_Id',$ceare_center_id)->get();
        $TourPointes=TourPoint::paginate(100);
        // echo "<pre>";
        // print_r($TourPoint);
        // die;

        $titel="Citys of Pakistan";
        return view('frontend.Searching_result')->with(compact('TourPointes','City','titel','Health','Tbl_Hotel','Local','guider','TourPoint'));

    }
    public function City_view()
    {
        $City=City::paginate(100);

    $tourPointid="";
    $tour_guiderid="";
    $local_roomid="";
    $hotel_id="";
    $ceare_center_id="";
    foreach($City as $Cityes){
        $tourPointid=$Cityes->city_tourPointsID;
        $tour_guiderid=$Cityes->city_tourPointsID;
        $local_roomid=$Cityes->city_tourPointsID;
        $hotel_id=$Cityes->city_tourPointsID;
        $ceare_center_id=$Cityes->city_tourPointsID;
    }
    $TourPoint=TourPoint::where('tour_point_id',$tourPointid)->get();
    $guider=GuiderRegistrationModel::where('guider_id',$tour_guiderid)->get();
    $Local=Tbl_local_rooms::where('room_id',$local_roomid)->get();
    $Tbl_Hotel=Tbl_Hotel::where('hotel_id',$hotel_id)->get();
    $Health=HealthCareCenter::where('care_center_Id',$ceare_center_id)->get();
    $TourPointes=TourPoint::paginate(100);
    // echo "<pre>";
    // print_r($City);
    // die;

    $titel="Citys of Pakistan";
    return view('frontend.city_user_sight')->with(compact('TourPointes','City','titel','Health','Tbl_Hotel','Local','guider','TourPoint'));

    }
    public function show()
    {
        $City=City::paginate(100);
        $tourPointid="";
        $tour_guiderid="";
        $local_roomid="";
        $hotel_id="";
        $ceare_center_id="";
        foreach($City as $Cityes){
            $tourPointid=$Cityes->city_tourPointsID;
            $tour_guiderid=$Cityes->city_tourPointsID;
            $local_roomid=$Cityes->city_tourPointsID;
            $hotel_id=$Cityes->city_tourPointsID;
            $ceare_center_id=$Cityes->city_tourPointsID;
        }
        $TourPoint=TourPoint::where('tour_point_id',$tourPointid)->get();
        $guider=GuiderRegistrationModel::where('guider_id',$tour_guiderid)->get();
        $Local=Tbl_local_rooms::where('room_id',$local_roomid)->get();
        $Tbl_Hotel=Tbl_Hotel::where('hotel_id',$hotel_id)->get();
        $Health=HealthCareCenter::where('care_center_Id',$ceare_center_id)->get();
        // echo "<pre>";
        // print_r($City);
        // die;
        $TourPointn="";
        foreach($TourPoint as $TourPointes)
        {
            $TourPointn=$TourPointes->tour_point_name;
        }
        // 2
        $guidern="";
        foreach($guider as $TourPointes)
        {
            $guidern=$TourPointes->guider_name;
        }
        // 3
        $Localn="";
        foreach($Local as $TourPointes)
        {
            $Localn=$TourPointes->room_address;
        }
        // 4
        $Tbl_Hoteln="";
        foreach($Tbl_Hotel as $TourPointes)
        {
            $Tbl_Hoteln=$TourPointes->hotel_name;
        }
        // 5
        $Healthn="";
        foreach($Health as $TourPointes)
        {
            $Healthn=$TourPointes->health_care_center_name;
        }
        $titel="Pakistan Citys";
        return view('frontend.city-view')->with(compact('City','titel','Healthn','Tbl_Hoteln','Localn','guidern','TourPointn'));
    }
    public function edit($id)
    {
        $City=City::where('city_id',$id)->get();
        if(is_null($City))
        {
            return redirect()->back();
        }
        else
        {
            $TourPoint=TourPoint::paginate(100);
        $guider=GuiderRegistrationModel::paginate(100);
        $Local=Tbl_local_rooms::paginate(100);
        $Tbl_Hotel=Tbl_Hotel::paginate(100);
        $Health=HealthCareCenter::paginate(100);

            $titel="Update City Data";
            $url=url('city_update'."/".$id);
            return view('frontend.city_update')->with(compact('City','titel','url','TourPoint','guider','Local','Tbl_Hotel','Health'));
        }

    }
    public function update($id,Request $request)
    {
        $img="";
        if($request->hasFile('city_image'))
        {
            $file=$request->file('city_image');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $img=$teaser_image;
        }

        City::where('city_id',$id)
        ->update([
            'city_name'=>$request->input('city_name'),
            'city_tourPointsID'=>$request->input('city_tourPointsID'),
            'city_tour_guiderID'=>$request->input('city_tour_guiderID'),
            'city_local_roomID'=>$request->input('city_local_roomID'),
            'city_hotelID'=>$request->input('city_hotelID'),
            'city_ceare_centersID'=>$request->input('city_ceare_centersID'),
            'city_image'=>$img,
            'city_history'=>$request->input('city_history'),
        ]);
        return redirect('City_view');
    }
    public function delete($id)
    {
        City::where('city_id',$id)->delete();
        return redirect()->back();
    }

}
