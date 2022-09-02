<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        return view('frontend.projects-classic');
    }
    public function masonry(){
        return view('frontend.projects-masonry');
    }
    public function fullwidth(){
        return view('frontend.projects-fullwidth');
    }
}
