<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\CategoryProvinces;
use App\Models\CategoryTourPakage;
use App\Models\TourPakages;

use Illuminate\Http\Request;

class CategoryTourPakageController extends Controller
{
    public function index()
    {
        $tourpakage=TourPakages::all();
        // echo "<pre>";
        // print_r($tourpakage->all());
        // die;
        $titel="Category of Tour Pakage";
        $url =url('category_tour_pakage');
        return view('frontend.category_tour_pakage')->with(compact('tourpakage','titel','url'));
    }
    public function store(Request $request)
    {
      $pakagecatagory = new CategoryTourPakage;
      $id=$request['tour_pakege_name'];
      $tourpakage=TourPakages::where('tour_pakage_id',$id)->get();
      $name="";
      foreach($tourpakage as $tourpakag)
      {
        $name=$tourpakag->pakage_name;
      }
       $pakagecatagory->tour_pakege_name=$name;
       $pakagecatagory->pakege_description=$request['pakege_description'];
       $pakagecatagory->tour_pakageID=$request['tour_pakege_name'];
        $pakagecatagory->save();
        return redirect('category_tour_pakage_show');
    }
    public function show()
    {
        $pakagecatagory=CategoryTourPakage::all();
        $titel="Catagory of all pakages";
        return view('frontend.category_of_tour_pakage_view')->with(compact('pakagecatagory','titel'));
    }
    public function edit($id)
    {
        $pakagecatagory=CategoryTourPakage::where('category_pakege_id',$id)->get();
        $tourpakage=TourPakages::all();
        if(is_null($pakagecatagory))
        {
            return redirect('category_tour_pakage_show');
        }
        else
        {
            $titel="Edit Category Tour Pakage ";
            $url=url('category_tour_pakage_update'."/".$id);
            return view('frontend.category_tour_pakage_update')->with(compact('titel','url','pakagecatagory','tourpakage'));
        }
    }
    public function update($id,Request $request)
    {

        $id1=$request['tour_pakege_name'];
        $tourpakage=TourPakages::where('tour_pakage_id',$id1)->get();
        $name="";
        foreach($tourpakage as $tourpakag)
        {
            $name=$tourpakag->pakage_name;
        }

        CategoryTourPakage::where('category_pakege_id',$id)
        ->update([
            'tour_pakege_name'=>$name,
            'pakege_description'=>$request->input('pakege_description'),
            'tour_pakageID'=>$request->input('tour_pakege_name'),
        ]);
        return redirect('category_tour_pakage_show');

    }
    public function delete($id)
    {
        CategoryTourPakage::where('category_pakege_id',$id)->delete();
        return redirect()->back();
    }
}
