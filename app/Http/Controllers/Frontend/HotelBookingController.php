<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelBooking;

class HotelBookingController extends Controller
{
    public function index()
    {
        $name="";
        $url=url('hotel_booking');
        $titel="Hotel booking";
        $data=compact('url','titel','name');
        return view('frontend.hotel-booking')->with($data);
    }
    public function index_user_sight($name=null)
    {
        $url=url('hotel_booking_user_sight');
        $titel="Hotel booking";
        $data=compact('url','titel','name');
        return view('frontend.hotel-booking')->with($data);
    }
    //insert data

    public function insert_user_sight(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $hotel= new HotelBooking;
        $hotel->hotel_name=$request['hotel_name'];
        $hotel->hotel_type=$request['hotel'];
        $hotel->hotel_roomtype=$request['roomtype'];
        $hotel->hotel_room_bookingDate=$request['hotel_room_bookingDate'];
        $hotel->hotel_room_checkoutDate=$request['hotel_room_checkoutDate'];
        $hotel->save();
        return redirect('/services');
    }
    public function insert(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $hotel= new HotelBooking;
        $hotel->hotel_name=$request['hotel_name'];
        $hotel->hotel_type=$request['hotel'];
        $hotel->hotel_roomtype=$request['roomtype'];
        $hotel->hotel_room_bookingDate=$request['hotel_room_bookingDate'];
        $hotel->hotel_room_checkoutDate=$request['hotel_room_checkoutDate'];
        $hotel->save();
        return redirect('/hotel_booking_view');
    }
    public function show(Request $request)
    {
        // echo"data hase been inserted";
        // die;
        $hoteles=HotelBooking::paginate(100);
        $titel="Hotel Booking";
        $data=compact('hoteles','titel');
        return view('frontend.hotel_booking_view')->with($data);
    }
    //edit function
    public function edit($id)
    {
        // echo $id;
        $hoteles=HotelBooking::where('hotel_id',$id)->get();
        if(is_null($hoteles))
        {
            //not found
            return redirect('/hotel_booking_view');
        }
        else
        {
            //find data
            $url=url('update_hotel_booking'."/".$id);
            $titel="Update Hotel Booking";
            $data=compact('url','titel','hoteles');
            return view('frontend.hotel-booking-update')->with($data);
        }

    }
     //update function
    public function update(Request $request,$id)
    {
        HotelBooking::where('hotel_id',$id)
        ->update([
            'hotel_name'=>$request->input('hotel_name'),
            'hotel_type'=>$request->input('hotel'),
            'hotel_roomtype'=>$request->input('roomtype'),
            'hotel_room_bookingDate'=>$request->input('hotel_room_bookingDate'),
            'hotel_room_checkoutDate'=>$request->input('hotel_room_checkoutDate'),
        ]);
        return redirect('/hotel_booking_view');
    }
    //delete function
    public function delete($id)
    {
        HotelBooking::where('hotel_id',$id)->delete();
        return redirect()->back();
    }


}
