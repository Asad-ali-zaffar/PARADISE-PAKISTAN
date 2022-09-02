@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>Visiter View</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Visiter View</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    {{-- view section --}}
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">



                    <table class="table" id="myTable">
                    {{-- <pre>
                        {{print_r($visiter)}}
                    </pre> --}}
                    @php
                        $i=1;
                    @endphp
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>message</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tbl_visitor_reviews as $visite )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$visite->review_name}}</td>
                            <td>{{$visite->review_last}}</td>
                            <td>{{$visite->review_email}}</td>
                            <td>{{$visite->message}}</td>

                            <td><img class="rounded-circle" src="{{url('visiters').'/'.$visite->review_img}}"></td>
                            <td>
                               <a href="{{url('visiter_review_delete')}}/{{$visite->review_id}}"><button class="btn btn-danger">Delete</button></a>
                               {{-- <a href="{{url('/update_review')}}/{{$visite->review_id}}"><button class="btn btn-primary">Edit</button></a> --}}
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

