<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbl_visitor_reviews;

class HomeController extends Controller
{
    public function index(){
        $tbl_visitor_reviews=Tbl_visitor_reviews::paginate(100);
        return view('frontend.index')->with(compact('tbl_visitor_reviews'));
    }
}
