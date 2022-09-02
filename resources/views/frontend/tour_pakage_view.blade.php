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
                            <th>Pakage Name</th>
                            <th>Pakage Dayes</th>
                            <th>Pakage Price</th>
                            <th>Pakage Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tourpakage as $tourpakages )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$tourpakages->pakage_name}}</td>
                            <td>{{$tourpakages->pakage_dayes}}</td>
                            <td>{{$tourpakages->pakage_price}}</td>
                            {{-- <td>
                                <img class="rounded-circle" src="{{url('visiters').'/'.$tourpakages->pakage_img}}">
                            </td> --}}
                            <td>{{$tourpakages->pakage_description}}</td>
                            <td>
                               <a href="{{url('/delete_tour_pakage')}}/{{$tourpakages->tour_pakage_id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/tour_pakage_edit')}}/{{$tourpakages->tour_pakage_id}}"><button class="btn btn-primary">Edit</button></a>
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

