@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>{{$titel}}</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>{{$titel}}</li>
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
                        {{print_r($guider)}}
                    </pre> --}}
                    @php
                        $i=1;
                    @endphp
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Health Care Center Name</th>
                            <th>Address</th>
                            <th>City</th>
                            {{-- <th>Image</th> --}}
                            <th>discription</th>


                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Health as $guide )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$guide->health_care_center_name}}</td>
                            <td>{{$guide->health_care_center_address}}</td>
                            <td>{{$guide->health_care_center_cityID}}</td>
                            {{-- <td><img class="rounded-circle" src="{{url('visiters').'/'.$guide->health_care_center_img}}"></td> --}}
                            <td>{{$guide->health_care_discription}}</td>
                            <td>
                               <a href="{{url('/health_care_center-delete')}}/{{$guide->care_center_Id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/health_care_center-edit')}}/{{$guide->care_center_Id}}"><button class="btn btn-primary">Edit</button></a>
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

