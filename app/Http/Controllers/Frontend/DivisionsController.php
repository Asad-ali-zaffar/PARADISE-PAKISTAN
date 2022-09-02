<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Divisions;
use App\Models\City;
use App\Models\GuiderRegistrationModel;
use App\Models\TourPoint;
use App\Models\Tbl_Hotel;
use App\Models\Tbl_Local_rooms;
use App\Models\HealthCareCenter;
use Illuminate\Http\Request;

class DivisionsController extends Controller
{
    public function index()
    {

        $City=City::all();
        $GuiderRegistrationModel=GuiderRegistrationModel::all();
        $TourPoint=TourPoint::all();
        $Tbl_Hotel=Tbl_Hotel::all();
        $Tbl_Local_rooms=Tbl_Local_rooms::all();
        $HealthCareCenter=HealthCareCenter::all();
        $titel="Divisions of Pakistan";
        $url=url('Divisions');
        return view('frontend.division')->with(compact('City','GuiderRegistrationModel','TourPoint','Tbl_Hotel','Tbl_Local_rooms','HealthCareCenter','titel','url'));

    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;

        $Divisions= new Divisions;
        $Divisions->division_name=$request['division_name'];
        $Divisions->division_cityID=$request['division_cityID'];
        $Divisions->division_tour_guiderID=$request['division_tour_guiderID'];
        $Divisions->division_tour_pointID=$request['division_tour_pointID'];
        $Divisions->division_hotelID=$request['division_hotelID'];
        $Divisions->division_local_roomID=$request['division_local_roomID'];
        $Divisions->division_health_care_centerID=$request['health_care_center_cityID'];
        $Divisions->save();
        return redirect('Divisions-view');

    }
    public function show()
    {
        $Divisions=Divisions::paginate(100);
        $cityID="";$guiderID="";$pointID="";$hotelID="";$local_roomID="";$health="";
        $titel="All Divisions of Pakistan";
        foreach($Divisions as $Division)
        {
            $cityID=$Division->division_cityID;
            $guiderID=$Division->division_tour_guiderID;
            $pointID=$Division->division_tour_pointID;
            $hotelID=$Division->division_hotelID;
            $local_roomID=$Division->division_local_roomID;
            $health=$Division->division_health_care_centerID;
        }
        $City=City::where('city_id',$cityID)->get();
        $GuiderRegistrationModel=GuiderRegistrationModel::where('guider_id',$guiderID)->get();
        $TourPoint=TourPoint::where('tour_point_id',$pointID)->get();
        $Tbl_Hotel=Tbl_Hotel::where('hotel_id',$hotelID)->get();
        $Tbl_Local_rooms=Tbl_Local_rooms::where('room_id',$local_roomID)->get();
       $HealthCare=HealthCareCenter::where('care_center_Id',$health)->get();
        return view('frontend.divisions-view')->with(compact('titel','Divisions','City','GuiderRegistrationModel','TourPoint','Tbl_Hotel','Tbl_Local_rooms','HealthCare'));
    }
    public function edit($id)
    {
        $Divisions=Divisions::where('division_id',$id)->get();
        if(is_null($Divisions))
        {
            return redirect('Divisions-view');
        }
        else
        {
            $City=City::all();
            $GuiderRegistrationModel=GuiderRegistrationModel::all();
            $TourPoint=TourPoint::all();
            $Tbl_Hotel=Tbl_Hotel::all();
            $Tbl_Local_rooms=Tbl_Local_rooms::all();
            $HealthCareCenter=HealthCareCenter::all();
            $titel="Edit Division Data";
            $url=url('Divisions-update'."/".$id);
            return view('frontend.division_update')->with(compact('Divisions','url','titel','HealthCareCenter','Tbl_Local_rooms','Tbl_Hotel','TourPoint','GuiderRegistrationModel','City'));

        }

    }
    public function update($id,Request $request)
    {
        Divisions::where('division_id',$id)->update([
            'division_name'=>$request->input('division_name'),
            'division_cityID'=>$request->input('division_cityID'),
            'division_tour_guiderID'=>$request->input('division_tour_guiderID'),
            'division_tour_pointID'=>$request->input('division_tour_pointID'),
            'division_hotelID'=>$request->input('division_hotelID'),
            'division_local_roomID'=>$request->input('division_local_roomID'),
            'division_health_care_centerID'=>$request->input('health_care_center_cityID'),
        ]);
        return redirect('Divisions-view');

    }
    public function delete($id)
    {
        Divisions::where('division_id',$id)->delete();
        return redirect()->back();
    }
}
