<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbl_Hotel;
use App\Models\Tbl_local_rooms;
use App\Models\HealthCareCenter;

class ServicesController extends Controller
{
    public function index(){

        return view('frontend.services-dark');
    }
    public function residence(){
        $tbl_Hoteles = Tbl_Hotel::paginate(100);
        $localrooms = Tbl_local_rooms::paginate(100);
        return view('frontend.projects-fullwidth')->with(compact('tbl_Hoteles','localrooms'));
    }

    public function hotel_residence(){
        $tbl_Hoteles = Tbl_Hotel::paginate(100);
        return view('frontend.services-light')->with(compact('tbl_Hoteles'));
    }
    public function local_residence(){
        $localrooms = Tbl_local_rooms::paginate(100);
        return view('frontend.services-local-residence')->with(compact('localrooms'));
    }

    public function tour_guide(){
        return redirect('/team');
    }
    public function care_center(){

        $Health = HealthCareCenter::paginate(100);
        return view('frontend.health_care_center1')->with(compact('Health'));
    }

}
