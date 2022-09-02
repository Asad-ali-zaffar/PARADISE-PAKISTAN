<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourPoint;
use App\Models\City;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog');
    }
    public function sindh_blog(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.sindh-blog')->with(compact('TourPointes'));
    }
    public function sindh_blog2(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.sindh-blog2')->with(compact('TourPointes'));
    }
    public function search(Request $request){
        $request['search-field'];
        $data=compact('request');
        return view('frontend.sindh-blog2')->with($data);
    }
    public function balochistan_blog(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.balochistan-blog')->with(compact('TourPointes'));
    }
    public function balochistan_blog2(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.balochistan-blog2')->with(compact('TourPointes'));
    }
    public function punjab_blog(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.punjab-blog')->with(compact('TourPointes'));
    }
    public function interesting_point($id){
        $TourPoint=TourPoint::where('tour_point_id',$id)->get();
        $titel="Tour point history";

        $cityID="";
        foreach($TourPoint as $Cityes){
            $cityID=$Cityes->tour_point_cityID;
             }
             $City=City::where('city_id',$cityID)->get();
            //  echo "<pre>";
            //  print_r($City);
            //  die;
             $TourPointes=TourPoint::paginate(100);
             return view('frontend.tour_point_history')->with(compact('TourPointes','TourPoint','City','titel'));
    }
    public function punjab_blog2(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.punjab-blog2')->with(compact('TourPointes'));
    }
    public function kpk_blog(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.kpk-blog')->with(compact('TourPointes'));
    }
    public function kpk_blog2(){
        $TourPointes=TourPoint::paginate(100);
        return view('frontend.kpk-blog2')->with(compact('TourPointes'));
    }

}
