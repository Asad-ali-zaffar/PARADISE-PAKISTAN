<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiterModel;

class RagesterController extends Controller
{
    public function index(){
        $url=url('/register');
        return view('frontend.ragester')->with(compact('url'));
    }
    public function index_user_sight(){
        $url=url('/register_user_sight');
        return view('frontend.ragester')->with(compact('url'));
    }
    public function register_user_sight(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        // inset Query
        $visiter = new VisiterModel();
        $visiter->visiter_name=$request['name'];
        $visiter->visiter_email=$request['email'];
        $visiter->visiter_password=md5($request['password']);
        $visiter->visiter_dob=$request['dob'];
        $visiter->visiter_gender=$request['gender'];
        $visiter->visiter_address=$request['address'];
        $visiter->visiter_country=$request['ucountry'];
        $visiter->visiter_city=$request['city'];
        $visiter->visiter_phoneNo=$request['phon_number'];
        $visiter->visiter_cnic=$request['cnic'];
        if($request->hasFile('img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $visiter->visiter_img=$teaser_image;
        }

        $visiter->save();
        return redirect('/');
    }
    public function register(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        // inset Query
        $visiter = new VisiterModel();
        $visiter->visiter_name=$request['name'];
        $visiter->visiter_email=$request['email'];
        $visiter->visiter_password=md5($request['password']);
        $visiter->visiter_dob=$request['dob'];
        $visiter->visiter_gender=$request['gender'];
        $visiter->visiter_address=$request['address'];
        $visiter->visiter_country=$request['ucountry'];
        $visiter->visiter_city=$request['city'];
        $visiter->visiter_phoneNo=$request['phon_number'];
        $visiter->visiter_cnic=$request['cnic'];
        if($request->hasFile('img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $visiter->visiter_img=$teaser_image;
        }

        $visiter->save();
        return redirect('/visiter-view')->with('status','image hase been uploaded');
    }
    //view data on table this function
    public function visiter_data(Request $request)
    {
        $search=$request['search-field'] ?? "";
        if($search != "")
        {
            //where
            $visiter=VisiterModel::where("visiter_name","LIKE","%$search%")->orwhere("visiter_email","LIKE","%$search%")->get();
        }
        else
        {
            $visiter= VisiterModel::paginate(100);
        }


        $data=compact('visiter','search');
        return view('frontend.visiter-view')->with($data);
    }

    //this function delete record in database
    public function delete($id){
     VisiterModel::find($id)->delete();
     return redirect()->back();
        // echo $id;
        // // print_r();
        // // echo "</pre>";
        // die;

    }
    //edit profile visiter
    public function edit($id)
    {
        // echo $id;
        // die;
        $visiter = VisiterModel::find($id);

        if(is_null($visiter)){
            //not found
            return redirect('frontend.visiter-view');
        }
        else
        {
            //found
            $url=url('/visiter/profile_update'."/".$id);
            $title="Update visiter Profile";
            $data=compact('visiter','url','title');
            return view('frontend.update')->with($data);
        }
    }


    public function profile_update($id, Request $request)
    {
        $visiter=VisiterModel::find($id);
        $visiter->visiter_name=$request['name'];
        $visiter->visiter_email=$request['email'];
        $visiter->visiter_password=md5($request['password']);
        $visiter->visiter_dob=$request['dob'];
        $visiter->visiter_gender=$request['gender'];
        $visiter->visiter_address=$request['address'];
        $visiter->visiter_country=$request['ucountry'];
        $visiter->visiter_city=$request['city'];
        $visiter->visiter_phoneNo=$request['phon_number'];
        $visiter->visiter_cnic=$request['cnic'];
        if($request->hasFile('img'))
        {
            $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();;
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $visiter->visiter_img=$teaser_image;
        }
        $visiter->save();
        return redirect('/visiter-view');
    }
    public function status(Request $request,$id){
        $visites =VisiterModel::where('id',$id)->get();
        foreach($visites as $visite)
        {
            if($visite->visiter_status == 0)
            {
                // echo "put 1";
                VisiterModel::where('id',$id)->update(['visiter_status'=>1]);
            }
            else
            {
                // echo "put 0";
                VisiterModel::where('id',$id)->update(['visiter_status'=>0]);
            }
        }
        return redirect()->back();
    }

}

