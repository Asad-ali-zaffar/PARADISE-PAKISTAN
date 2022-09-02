<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\GuiderRegistrationModel;
use Illuminate\Http\Request;

class GuiderRegistrationModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('tour_guider_registration');
        return view('frontend.touirgaider-registration')->with(compact('url'));
    }
    public function index_user()
    {
        $url=url('guider_registration_user_sight');
        return view('frontend.touirgaider-registration')->with(compact('url'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store_user(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $guider= new GuiderRegistrationModel;
        $guider->guider_name=$request['name'];
        $guider->guider_email=$request['email'];
        $guider->guider_password=md5($request['password']);
        $guider->guider_dob=$request['dob'];
        $guider->guider_gender=$request['gender'];
        $guider->guider_city=$request['city'];
        $guider->guider_countery=$request['ucountry'];
        $guider->guider_address=$request['address'];
        $guider->guider_phoneNo=$request['phon_number'];
        $guider->guider_cnic=$request['cnic'];
        $guider->guider_guide_city_name=$request['guidingcity'];
        if($request->hasFile('img'))
        {
            $file=$request->file('img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $guider->guider_img=$teaser_image;
        }
         $guider->guider_fbID_link=$request['fburl'];
         $guider->guider_linkedin_ID_link=$request['linkedinurl'];
         $guider->guider_twitter_ID_link=$request['twitterurl'];
         $guider->guider_skype_ID_link=$request['skypeurl'];
         $guider->save();
         return redirect('/team')->with('status','Data hase been inserted');
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        $guider= new GuiderRegistrationModel;
        $guider->guider_name=$request['name'];
        $guider->guider_email=$request['email'];
        $guider->guider_password=md5($request['password']);
        $guider->guider_dob=$request['dob'];
        $guider->guider_gender=$request['gender'];
        $guider->guider_city=$request['city'];
        $guider->guider_countery=$request['ucountry'];
        $guider->guider_address=$request['address'];
        $guider->guider_phoneNo=$request['phon_number'];
        $guider->guider_cnic=$request['cnic'];
        $guider->guider_guide_city_name=$request['guidingcity'];
        if($request->hasFile('img'))
        {
            $file=$request->file('img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $guider->guider_img=$teaser_image;
        }
         $guider->guider_fbID_link=$request['fburl'];
         $guider->guider_linkedin_ID_link=$request['linkedinurl'];
         $guider->guider_twitter_ID_link=$request['twitterurl'];
         $guider->guider_skype_ID_link=$request['skypeurl'];
         $guider->save();
         return redirect('/guider-view')->with('status','Data hase been inserted');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuiderRegistrationModel  $guiderRegistrationModel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        $search=$request['search-field'] ?? "";
        if($search != "")
        {
            $guider = GuiderRegistrationModel::where("guider_name","LIKE","%$search%")->orwhere("guider_email","LIKE","%$search%")->get();
        }
        else
        {
            $guider=GuiderRegistrationModel::paginate(100);
        }
        $data=compact('guider','search');
        return view('frontend.guider-view')->with($data);

    }
// this function send data on the team page
    public function show_team(Request $request )
    {
        $guider=GuiderRegistrationModel::all();
            // echo
        $data=compact('guider');
        return view('frontend.team')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuiderRegistrationModel  $guiderRegistrationModel
     * @return \Illuminate\Http\Response
     */
    public function edit($guider_id)
    {
        // echo $guider_id;
        // die;
        $guider=GuiderRegistrationModel::where('guider_id',$guider_id)->get();//find($guider_id);//
        // echo "<pre>";
        // print_r($guider);
        // die;
        if(is_null($guider))
        {
            //not found data
            return redirect('/guider-view');
        }
        else
        {
         $url=url('/guider-update'."/".$guider_id);
         $titel="Update date Guider";
        $data=compact('guider','titel','url');
        return view('frontend.touirgaider-update')->with($data);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuiderRegistrationModel  $guiderRegistrationModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo $id;
        // echo "<pre>";
        // print_r($request->all());
        // die;
        // $guider =new GuiderRegistrationModel;   //::where('guider_id',$id);//find($id);//
        $img="";
        if($request->hasFile('img'))
        {
            // $request->validate(['img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
            $file=$request->file('img');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/visiters');
            $file->move($destinationPath,$teaser_image);
            $img=$teaser_image;
        }
        // echo $img;
        // die;
         $guider =GuiderRegistrationModel::where('guider_id',$id)
         ->update([
            'guider_name'=>$request->input('name'),
            'guider_email'=>$request->input('email'),
            'guider_password'=>md5($request->input('password')),
            'guider_dob'=>$request->input('dob'),
            'guider_gender'=>$request->input('gender'),
            'guider_city'=>$request->input('city'),
            'guider_countery'=>$request->input('ucountry'),
            'guider_address'=>$request->input('address'),
            'guider_phoneNo'=>$request->input('phon_number'),
            'guider_cnic'=>$request->input('cnic'),
            'guider_guide_city_name'=>$request->input('guidingcity'),
            'guider_img'=>$img,
            'guider_fbID_link'=>$request->input('fburl'),
            'guider_linkedin_ID_link'=>$request->input('linkedinurl'),
            'guider_twitter_ID_link'=>$request->input('twitterurl'),
            'guider_skype_ID_link'=>$request->input('skypeurl'),
         ]);
        return redirect('/guider-view')->with('status','Data hase been inserted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuiderRegistrationModel  $guiderRegistrationModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GuiderRegistrationModel::where('guider_id',$id)->delete();
        return redirect()->back();
    }
    public function status(Request $request,$id){
        $guider =GuiderRegistrationModel::where('guider_id',$id)->get();
        foreach($guider as $guide)
        {
            if($guide->guider_status == 0)
            {
                // echo "put 1";
                GuiderRegistrationModel::where('guider_id',$id)->update(['guider_status'=>1]);
            }
            else
            {
                // echo "put 0";
                GuiderRegistrationModel::where('guider_id',$id)->update(['guider_status'=>0]);
            }
        }
        return redirect()->back();
    }
}
