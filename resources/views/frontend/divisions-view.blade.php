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

                    @php
                        $i=1;
                    @endphp
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Division Name</th>
                            <th>City name</th>
                            <th>Guider name</th>
                            <th>Tour Point</th>
                            <th>Hoteles</th>
                            <th>Local Rooms</th>
                            <th>Health Care Center</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Divisions as $guide)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$guide->division_name}}</td>
                            @foreach ($City as $Citye )
                            <td>{{$Citye->city_name}}</td>
                            @endforeach
                            @foreach ($GuiderRegistrationModel as $Citye )
                            <td>{{$Citye->guider_name}}</td>
                            @endforeach
                            @foreach ($TourPoint as $Citye )
                            <td>{{$Citye->tour_point_name}}</td>
                            @endforeach
                            @foreach ($Tbl_Hotel as $Citye )
                            <td>{{$Citye->hotel_name}}</td>
                            @endforeach
                            @foreach ($Tbl_Local_rooms as $Citye )
                            <td>{{$Citye->room_address}}</td>
                            @endforeach

                            @foreach ($HealthCare as $Citye )
                            <td>{{$Citye->health_care_center_name}}</td>
                            @endforeach


                            <td>
                               <a href="{{url('/Divisions-delete')}}/{{$guide->division_id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/Divisions-edit')}}/{{$guide->division_id}}"><button class="btn btn-primary">Edit</button></a>
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

