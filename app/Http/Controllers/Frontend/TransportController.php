<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transport;

class TransportController extends Controller
{
    public function index()
    {
        return view('frontend.transport_booking');
    }
    //Store data in data base
    public function store(Request $request){
    $transport=new Transport;
    $transport->source_place_name=$request['source_place_name'];
    $transport->destination_place_name=$request['destination_place_name'];
    $transport->going_time=$request['going_time'];
    $transport->going_date=$request['going_date'];
    $transport->transport_type=$request['transport'];
    $transport->number_of_seats=$request['number_of_seats'];
    $transport->seat_type=$request['seat_type'];
    $transport->transport_total_bill=$request['transport_total_bill'];
    $transport->save();
    return redirect('/transport-booking-view');
    }

    //view data
    public function show(Request $request)
    {
        $transportes=Transport::paginate(100);
        $data=compact('transportes');
        return view('frontend.transport-booking-view')->with($data);
    }
    //edit data
    public function edit($id)
    {
        $transportes=Transport::where('transport_book_ID',$id)->get();
        if(is_null($transportes))
        {
            //not found
            return redirect('/transport-booking-view');
        }
        else
        {
            $url=url('/transport_booking-update'."/".$id);
            $titel="Transport Booking Update";
            $data=compact('transportes','url','titel');
            return view('frontend.transport_booking-update')->with($data);
        }

    }
    //update data save
    public function update(Request $request,$id)
    {
        Transport::where('transport_book_ID',$id)
        ->update([
            'source_place_name'=>$request->input('source_place_name'),
            'destination_place_name'=>$request->input('destination_place_name'),
            'going_time'=>$request->input('going_time'),
            'going_time'=>$request->input('going_time'),
            'going_date'=>$request->input('going_date'),
            'transport_type'=>$request->input('transport'),
            'number_of_seats'=>$request->input('number_of_seats'),
            'seat_type'=>$request->input('seat_type'),
            'transport_total_bill'=>$request->input('transport_total_bill'),
        ]);
        return redirect('/transport-booking-view');
    }
    public function delete($id){
        Transport::where('transport_book_ID',$id)->delete();
        return redirect()->back();
    }

}
