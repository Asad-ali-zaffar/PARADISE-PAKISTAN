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
                            <th>city_name</th>
                            <th>city_tourPointsID</th>
                            <th>city_tour_guiderID</th>
                            <th>city_local_roomID</th>
                            <th>city_hotelID</th>
                            <th>city_ceare_centersID</th>
                            <th>city_history</th>
                            {{-- <th>city_image</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($City as $pakagecatagorys )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$pakagecatagorys->city_name}}</td>
                            <td>{{$TourPointn}}</td>
                            <td>{{$guidern}}</td>
                            <td>{{$Localn}}</td>
                            <td>{{$Tbl_Hoteln}}</td>
                            <td>{{$Healthn}}</td>
                            {{-- <td>{{city_image}}</td> --}}
                            <td>{{$pakagecatagorys->city_history}}</td>

                            <td>

                               <a href="{{url('/city_delete')}}/{{$pakagecatagorys->city_id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/city_edit')}}/{{$pakagecatagorys->city_id}}"><button class="btn btn-primary">Edit</button></a>
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

