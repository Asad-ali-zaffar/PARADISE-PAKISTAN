<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TourPakages;
use App\Models\Tbl_visitor_reviews;

class ShopController extends Controller
{

    public function index(){
        $tourpakage=TourPakages::paginate(100);
        $titel="Tour Pakages";
        return view('frontend.shop')->with(compact('titel','tourpakage'));
    }
    public function product_detail($id=null){
        $tourpakage=TourPakages::where('tour_pakage_id',$id)->get();
        $titel="Pakages Detail";
        $tbl_visitor_reviews=Tbl_visitor_reviews::paginate(100);
        $url=url('pakagbooking'."/".$id);
        $url1=url('vistor_reviews');
        return view('frontend.product-detail')->with(compact('titel','tourpakage','url','url1','tbl_visitor_reviews'));
    }
    public function cart_page(){
        return view('frontend.cart-page');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
}
