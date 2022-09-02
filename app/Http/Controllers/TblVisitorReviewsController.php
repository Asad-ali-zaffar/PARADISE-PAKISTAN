<?php

namespace App\Http\Controllers;

use App\Models\Tbl_visitor_reviews;
use Illuminate\Http\Request;

class TblVisitorReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $review=new Tbl_visitor_reviews;

        echo "<pre>";

        $review->review_name=$request['username'];
        $review->review_last=$request['Last_name'];
        $review->review_email=$request['email'];

        if($request->hasFile('Pakage_img'))
        {
            $file=$request->file('Pakage_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $review->review_img=$teaser_image;
        }
        $review->message=$request['message'];
        $review->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbl_visitor_reviews  $tbl_visitor_reviews
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {
        // echo "halo";
        // die;
        $tbl_visitor_reviews=Tbl_visitor_reviews::paginate(100);
        $titel="Visitor Reviews";
        return view('frontend.visitor_reviews_view')->with(compact('tbl_visitor_reviews','titel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_visitor_reviews  $tbl_visitor_reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_visitor_reviews $tbl_visitor_reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_visitor_reviews  $tbl_visitor_reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_visitor_reviews $tbl_visitor_reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_visitor_reviews  $tbl_visitor_reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tbl_visitor_reviews::where('review_id',$id)->delete();
        return redirect()->back();
    }
}
