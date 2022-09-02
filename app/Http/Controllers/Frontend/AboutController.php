<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbl_visitor_reviews;
use App\Models\GuiderRegistrationModel;

class AboutController extends Controller
{
    public function index(){
        $guider=GuiderRegistrationModel::all();
        return view('frontend.about')->with(compact('guider'));
    }
    public function team(){
        return view('frontend.team');
    }
    public function testimonials(){
        $tbl_visitor_reviews=Tbl_visitor_reviews::paginate(100);
        $titel="Visitor Reviews";
        return view('frontend.testimonials')->with(compact('titel','tbl_visitor_reviews'));
    }
}
