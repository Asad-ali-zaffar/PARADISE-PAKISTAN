@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>guider View</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>guider View</li>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phon Number</th>
                            <th>CNIC</th>
                            <th>Guiding City name</th>
                            <th>Status</th>
                            <th>Image</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guider as $guide )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$guide->guider_name}}</td>
                            <td>{{$guide->guider_email}}</td>
                            <td>{{$guide->guider_dob}}</td>
                            <td>
                                @if ($guide->guider_gender=="M")
                                Male
                                @elseif ($guide->guider_gender == "F")
                                Female
                                @else
                                Other
                                @endif
                            </td>
                            <td>{{$guide->guider_address}}</td>
                            <td>{{$guide->guider_city}}</td>
                            <td>{{$guide->guider_countery}}</td>
                            <td>{{$guide->guider_phoneNo}}</td>
                            <td>{{$guide->guider_cnic}}</td>
                            <td>{{$guide->guider_guide_city_name}}</td>
                            {{-- <td>{{$guide->guider_fbID_link}}</td>
                            <td>{{$guide->guider_linkedin_ID_link}}</td>
                            <td>{{$guide->guider_twitter_ID_link}}</td>
                            <td>{{$guide->guider_skype_ID_link}}</td> --}}

                            <td>
                                @if($guide->guider_status == "1")
                            <a href="{{url('/guider-status')}}/{{$guide->guider_id}}">
                                <span class="badge badge-success"> Active</span>
                            </a>
                            @else
                            <a href="{{url('/guider-status')}}/{{$guide->guider_id}}">
                              <span class="badge badge-danger">inactive</span>
                            </a>
                            @endif</td>
                            <td>
                                <img class="rounded-circle" src="{{url('visiters').'/'.$guide->guider_img}}">
                            </td>
                            <td>

                               <a href="{{url('/guider-delete')}}/{{$guide->guider_id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/guider-edit')}}/{{$guide->guider_id}}"><button class="btn btn-primary">Edit</button></a>
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

