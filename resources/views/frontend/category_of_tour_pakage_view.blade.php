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
                            <th>Tour Pakege Name</th>
                            <th>Pakege Description</th>
                            <th>Tour PakageID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pakagecatagory as $pakagecatagorys )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$pakagecatagorys->tour_pakege_name}}</td>
                            <td>{{$pakagecatagorys->pakege_description}}</td>
                            <td>{{$pakagecatagorys->tour_pakageID}}</td>

                            <td>

                               <a href="{{url('/category_tour_pakage_delete')}}/{{$pakagecatagorys->category_pakege_id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/category_tour_pakage_edit')}}/{{$pakagecatagorys->category_pakege_id}}"><button class="btn btn-primary">Edit</button></a>
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

