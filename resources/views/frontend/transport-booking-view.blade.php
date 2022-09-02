@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>Transport booking view</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Transport booking view</li>
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
                            <th>Source place name</th>
                            <th>Destination place name</th>
                            <th>Going time</th>
                            <th>Going date</th>
                            <th>Transport type</th>
                            <th>Number of seats</th>
                            <th>Seat type</th>
                            <th>Transport total bill</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transportes as $transport )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$transport->source_place_name}}</td>
                            <td>{{$transport->destination_place_name}}</td>
                            <td>{{$transport->going_time}}</td>
                            <td>{{$transport->going_date}}</td>
                            <td>{{$transport->transport_type}}</td>
                            <td>{{$transport->number_of_seats}}</td>
                            <td>{{$transport->seat_type}}</td>
                            <td>{{$transport->transport_total_bill}}</td>
                            {{-- <td>
                                @if ($guide->guider_gender=="M")
                                Male
                                @elseif ($guide->guider_gender == "F")
                                Female
                                @else
                                Other
                                @endif
                            </td> --}}
                            {{-- <td>{{$guide->guider_address}}</td>
                            <td>{{$guide->guider_city}}</td>
                            <td>{{$guide->guider_countery}}</td>
                            <td>{{$guide->guider_phoneNo}}</td>
                            <td>{{$guide->guider_cnic}}</td>
                            <td>{{$guide->guider_guide_city_name}}</td> --}}
                            {{-- <td>{{$guide->guider_fbID_link}}</td>
                            <td>{{$guide->guider_linkedin_ID_link}}</td>
                            <td>{{$guide->guider_twitter_ID_link}}</td>
                            <td>{{$guide->guider_skype_ID_link}}</td> --}}

                            {{-- <td>
                                @if($guide->guider_status == "1")
                            <a href="{{url('/guider-status')}}/{{$guide->guider_id}}">
                                <span class="badge badge-success"> Active</span>
                            </a>
                            @else
                            <a href="{{url('/guider-status')}}/{{$guide->guider_id}}">
                              <span class="badge badge-danger">inactive</span>
                            </a>
                            @endif</td> --}}
                            {{-- <td>
                                <img class="rounded-circle" src="{{url('visiters').'/'.$guide->guider_img}}">
                            </td> --}}
                            <td>

                               <a href="{{url('/transport_booking-delete')}}/{{$transport->transport_book_ID}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/transport_booking-edit')}}/{{$transport->transport_book_ID}}"><button class="btn btn-primary">Edit</button></a>
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

