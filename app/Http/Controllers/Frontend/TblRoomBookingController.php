<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Tbl_Room_booking;
use App\Models\Tbl_Hotel;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_local_rooms;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\isNull;

class TblRoomBookingController extends Controller
{
    function roomby_booking_type(Request $request){
        if($request->type == "hotel")
        {
        $hotels=Tbl_Hotel::all();
        $roomsData = [];
        foreach($hotels as $hotel)
        {
        $roomsData[]=$hotel->hotel_name;
        }
        $output='<option value="">select room</option>';
        foreach($roomsData as  $item){
            $output.='<option value="'.$item.'">'.$item.'</option>';
        }
        return $output;
        }
        else
        {
        $localroom=Tbl_local_rooms::all();
        $roomsData = [];
        foreach($localroom as $room)
        {
        $roomsData[]=$room->room_address;
        }
        $output='<option value="">select room</option>';
        foreach($roomsData as $item){
        $output.='<option value="'.$item.'">'.$item.'</option>';
        }
        return $output;
        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titel="Room Booking";
        $url=url('room_booking');
        return view('frontend.room_booking')->with(compact('url','titel'));
    }
    public function index_user_sight()
    {
        $titel="Room Booking";
        $url=url('room_booking_user_sight');
        return view('frontend.room_booking')->with(compact('url','titel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store_user_sight(Request $request)
    {
        $Room_booking=new Tbl_Room_booking;
        $Room_booking->room_booking_type= $request['booking_place_name'];
        $Room_booking->room_type= $request['rooms_type'];
        $Room_booking->room_checkIn_date= $request['checkin_date'];
        $Room_booking->room_checkout_date= $request['checkout_date'];
        $Room_booking->room_booking= $request['room_booking'];
        $Room_booking->save();
        return redirect('/services');

    }
    public function store(Request $request)
    {
        $Room_booking=new Tbl_Room_booking;
        $Room_booking->room_booking_type= $request['booking_place_name'];
        $Room_booking->room_type= $request['rooms_type'];
        $Room_booking->room_checkIn_date= $request['checkin_date'];
        $Room_booking->room_checkout_date= $request['checkout_date'];
        $Room_booking->room_booking= $request['room_booking'];
        $Room_booking->save();
        return redirect('room-booking-view');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbl_Room_booking  $tbl_Room_booking
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Room_booking = Tbl_Room_booking::paginate(100);
        // echo "<pre>";
        // print_r($Room_booking->all());
        // die;

        $titel="Booking view";
        return view('frontend.room_booking_view')->with(compact('Room_booking','titel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tbl_Room_booking  $tbl_Room_booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Room_booking=Tbl_Room_booking::where('room_booking_id',$id)->get();
        // echo "<pre>";
        // print_r($Room_booking->all());
        // die;
        if(is_null($Room_booking))
        {
            return redirect('room-booking-view');
        }
        else
        {
            $titel="Edit room booking";
            $url=url('room-booking-update'."/".$id);
            return view('frontend.room_booking_update')->with(compact('url','titel','Room_booking'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_Room_booking  $tbl_Room_booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tbl_Room_booking::where('room_booking_id',$id)
        ->update([
            'room_booking_type'=>$request->input('booking_place_name'),
            'room_type'=>$request->input('rooms_type'),
            'room_checkIn_date'=>$request->input('checkin_date'),
            'room_checkout_date'=>$request->input('checkout_date'),
            'room_booking'=>$request->input('room_booking'),
        ]);
        return redirect('/room-booking-view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_Room_booking  $tbl_Room_booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tbl_Room_booking::where('room_booking_id',$id)->delete();
        return redirect()->back();
    }
}
