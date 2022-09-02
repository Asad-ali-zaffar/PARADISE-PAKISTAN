<?php

namespace App\Http\Controllers;

use App\Models\Tbl_pakageBooking;
use Illuminate\Http\Request;

class TblPakageBookingController extends Controller
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
    public function store( Request $request ,$id)
    {
        
        $pakage=new Tbl_pakageBooking;
        $pakage->pakage_name=$request['pakage_name'];
        $pakage->pakage_days=$request['pakage_dayes'];
        $pakage->pakage_price=$request['pakage_price'];
        // $pakage->pakage_price=$request['pakage_price'];
        $pakage->pakage_id=$id;
        $pakage->save();
        return redirect()->back()->with("Your Pakage has booked");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbl_pakageBooking  $tbl_pakageBooking
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {
        $tbl_pakageBooking=Tbl_pakageBooking::paginate(100);
        $titel="Pakage Booking";
        return view('frontend.pakage_booking-view')->with(compact('tbl_pakageBooking','titel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_pakageBooking  $tbl_pakageBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_pakageBooking $tbl_pakageBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_pakageBooking  $tbl_pakageBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_pakageBooking $tbl_pakageBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_pakageBooking  $tbl_pakageBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Tbl_pakageBooking::where('pakage_booking_id',$id)->delete();
        return redirect()->back();
    }
}
