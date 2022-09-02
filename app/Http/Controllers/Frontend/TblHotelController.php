<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tbl_Hotel;
use Illuminate\Http\Request;

class TblHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = url('/register_hotel');
        $titel = "Hotel registeration";
        $data = compact('titel', 'url');
        return view('frontend.hotel_registeration')->with($data);
    }
    public function index_user_sight()
    {
        $url = url('/register_hotel_user_sight');
        $titel = "Hotel registeration";
        $data = compact('titel', 'url');
        return view('frontend.hotel_registeration')->with($data);
    }
    public function store_user_sight(Request $request)
    {

        $hoteles = new Tbl_Hotel;
        $hoteles->hotel_name = $request['hotel_name'];
        $hoteles->hotel_address = $request['hotel_address'];
        $hoteles->hotel_cityName = $request['hotel_cityName'];
        // $data = [];
        // if ($request->hasFile('hotel_img')) {
        //     foreach ($request->file('hotel_img') as $key => $file) {
        //         //image start
        //         $teaser_image = time() . rand(10, 1500) . '.' . $file->getClientOriginalExtension();
        //         // $teaser_image = time() . '.' . $file->getClientOriginalExtension();
        //         $destinationPath = public_path('/visiters');
        //         $file->move($destinationPath, $teaser_image);
        //         $data[] = $teaser_image;
        //     }

        // }
        if($request->hasFile('hotel_img'))
        {
            $file=$request->file('hotel_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $hoteles->hotel_img=$teaser_image;
        }
        //  = implode(',', $data);
        $hoteles->hotel_contact_number = $request['hotel_contact_number'];
        $hoteles->hotel_type = $request['hotel_type'];
        $hoteles->hotel_status = $request['roomtype'];
        $hoteles->save();
        return redirect('/hotel-residence');
    }
    /**
     * change status.
     */
    public function status(Request $request, $id)
    {
        $hoteles = Tbl_Hotel::where('hotel_id', $id)->get();
        foreach ($hoteles as $hotele) {
            if ($hotele->hotel_status == 1) {
                Tbl_Hotel::where('hotel_id', $id)->update(['hotel_status' => 0]);
            } else {
                Tbl_Hotel::where('hotel_id', $id)->update(['hotel_status' => 1]);
            }
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $hoteles = new Tbl_Hotel;
        $hoteles->hotel_name = $request['hotel_name'];
        $hoteles->hotel_address = $request['hotel_address'];
        $hoteles->hotel_cityName = $request['hotel_cityName'];
        if($request->hasFile('hotel_img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('hotel_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $hoteles->hotel_img=$teaser_image;
        }
        $hoteles->hotel_contact_number = $request['hotel_contact_number'];
        $hoteles->hotel_type = $request['hotel_type'];
        $hoteles->hotel_status = $request['roomtype'];
        $hoteles->save();
        return redirect('/hotel_register_view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tbl_Hotel  $tbl_Hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $tbl_Hoteles = Tbl_Hotel::paginate(100);
        $titel = "Hoteles View Page";
        return view('frontend.hotel-view')->with(compact('tbl_Hoteles', 'titel'));
    }
    public function edit($id)
    {
        $tbl_hotel = Tbl_Hotel::where('hotel_id', $id)->get();
        if (is_null($tbl_hotel)) {
            //not found
            return redirect('/hotel_register_view');
        } else {
            $titel = "Edit Page";
            $url = url('hotel_register_update' . "/" . $id);
            return view('frontend.hotel_registeration_update')->with(compact('url', 'titel', 'tbl_hotel'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tbl_Hotel  $tbl_Hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $img="";
        if($request->hasFile('hotel_img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('hotel_img');

            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $img=$teaser_image;
        }
        Tbl_Hotel::where('hotel_id', $id)
            ->update([
                'hotel_name' => $request->input('hotel_name'),
                'hotel_address' => $request->input('hotel_address'),
                'hotel_cityName' => $request->input('hotel_cityName'),
                'hotel_img' => $img,
                'hotel_contact_number' => $request->input('hotel_contact_number'),
                'hotel_type' => $request->input('hotel_type'),
                'hotel_status' => $request->input('roomtype')
            ]);
        return redirect('/hotel_register_view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tbl_Hotel  $tbl_Hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tbl_Hotel::where('hotel_id', $id)->delete();
        return redirect()->back();
    }
}
