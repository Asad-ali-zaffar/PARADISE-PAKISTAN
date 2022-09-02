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
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phon Number</th>
                            <th>CNIC</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visiter as $visite )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$visite->visiter_name}}</td>
                            <td>{{$visite->visiter_email}}</td>
                            <td>{{$visite->visiter_dob}}</td>
                            <td>
                                @if ($visite->visiter_gender=="M")
                                Male
                                @elseif ($visite->visiter_gender == "F")
                                Female
                                @else
                                Other
                                @endif
                            </td>
                            <td>{{$visite->visiter_address}}</td>
                            <td>{{$visite->visiter_city}}</td>
                            <td>{{$visite->visiter_country}}</td>
                            <td>{{$visite->visiter_phoneNo}}</td>
                            <td>{{$visite->visiter_cnic}}</td>
                            <td>
                                @if($visite->visiter_status == "1")
                            <a href="{{url('/update_status')}}/{{$visite->id}}">
                                <span class="badge badge-success"> Active</span>
                            </a>
                            @else
                            <a href="{{url('/update_status')}}/{{$visite->id}}">
                              <span class="badge badge-danger">inactive</span>
                            </a>
                            @endif</td>

                            <td><img class="rounded-circle" src="{{url('visiters').'/'.$visite->visiter_img}}">
                                </td>
                            <td>

                               <a href="{{url('/visiter-delete')}}/{{$visite->id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/update_profile')}}/{{$visite->id}}"><button class="btn btn-primary">Edit</button></a>
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

