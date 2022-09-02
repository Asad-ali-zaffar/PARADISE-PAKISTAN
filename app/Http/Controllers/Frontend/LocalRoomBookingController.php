<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tbl_local_rooms;

class LocalRoomBookingController extends Controller
{
    public function index()
    {
        $titel = "Local Room Registeration";
        $url = url('/register_LocalRoom');
        return view('frontend.local_room_registeration')->with(compact('url', 'titel'));
    }
    public function index_user_sight()
    {
        $titel = "Local Room Registeration";
        $url = url('/register_LocalRoom_user_sight');
        return view('frontend.local_room_registeration')->with(compact('url', 'titel'));
    }
    public function insert_user_sight(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $localroom = new Tbl_local_rooms;
        $localroom->room_ownerName = $request['room_ownerName'];
        $localroom->room_ownerNo = $request['room_ownerNo'];
        $localroom->room_address = $request['room_address'];
        $localroom->room_rent = $request['room_rent'];
        $localroom->room_status = $request['room_status'];
        // $data = [];
        // if ($request->hasFile('room_img')) {
        //     foreach ($request->file('room_img') as $file) {
        //         $image_name = time() . rand(10, 1500) . '.' . $file->getClientOriginalExtension();
        //         $distentionpath = public_path('/local_room');
        //         $file->move($distentionpath, $image_name);
        //         $data[] = $image_name;
        //     }
        // }
        if($request->hasFile('room_img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('room_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/local_room');
            $file->move($destinationPath,$teaser_image);
            $localroom->room_img=$teaser_image;
        }
    //  = implode(',', $data);
        $localroom->save();
        return redirect('/local-residence');
    }
    public function insert(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $localroom = new Tbl_local_rooms;
        $localroom->room_ownerName = $request['room_ownerName'];
        $localroom->room_ownerNo = $request['room_ownerNo'];
        $localroom->room_address = $request['room_address'];
        $localroom->room_rent = $request['room_rent'];
        $localroom->room_status = $request['room_status'];
        if($request->hasFile('room_img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('room_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/local_room');
            $file->move($destinationPath,$teaser_image);
            $localroom->room_img=$teaser_image;
        }
        // $localroom->room_img = implode(',', $data);
        $localroom->save();
        return redirect('/LocalRoom-view');
    }
    public function view(Request $request)
    {

        $localrooms = Tbl_local_rooms::paginate(100);
        // echo "<pre>";
        // print_r($localroom->all());
        // die;
        $titel = "Local Room Registeration View";
        return view('frontend.local_room_view')->with(compact('localrooms', 'titel'));
    }
    public function edit($id)
    {
        $localrooms = Tbl_local_rooms::where('room_id', $id)->get();
        if (is_null($localrooms)) {
            //not found data on this id
            return redirect('/LocalRoom-view');
        } else {
            $titel = "Edit Local Room Registeration";
            $url = url('LocalRoom_update' . "/" . $id);
            return view('frontend.local_room_update')->with(compact('url', 'titel', 'localrooms'));
        }
    }
    public function update(Request $request, $id)
    {

        $data = "";
        if($request->hasFile('room_img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('room_img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/local_room');
            $file->move($destinationPath,$teaser_image);
            $data=$teaser_image;
        }

        Tbl_local_rooms::where('room_id', $id)
            ->update([
                'room_ownerName' => $request->input('room_ownerName'),
                'room_ownerNo' => $request->input('room_ownerNo'),
                'room_address' => $request->input('room_address'),
                'room_rent' => $request->input('room_rent'),
                'room_status' => $request->input('room_status'),
                'room_img' => $data
            ]);
        return redirect('/LocalRoom-view');
    }
    public function changeStatus($id)
    {
        $localrooms = Tbl_local_rooms::where('room_id', $id)->get();
        foreach ($localrooms as $localroom)
        {
            if ($localroom->room_status == 0)
            {
                Tbl_local_rooms::where('room_id', $id)->update(['room_status' => 1]);
            }
            else
            {
                Tbl_local_rooms::where('room_id', $id)->update(['room_status' => 0]);
            }
        }
        return redirect()->back();
    }
    public function delete($id)
    {
        Tbl_local_rooms::where('room_id', $id)->delete();
        return redirect()->back();
    }
}
