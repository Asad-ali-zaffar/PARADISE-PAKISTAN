@extends('frontend.layouts.main')

@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('frontend/images/background/pu5.jpg') }})">
        <div class="auto-container">
            <h2>{{ $titel }}</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>{{ $titel }}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-classic padding-right">
                        <form action="{{$url}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @foreach ($TourPoint as $TourPoints  )

                            @endforeach
                            <x-input type="text" name="tour_point_name" label="Tour Point Name:" id="tour_point_name" placeholder="Enter Point Name" value="{{$TourPoints->tour_point_name}}" pattern="" />

                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                    <label for="destination_place_name">City Name:</label>
                                    <select class="border border-5 form-control-file p-2 rounded"
                                        name="destination_place_name" id="destination_place_name">
                                        @foreach ($citydata as $city)
                                            <option value="{{ $city->city_id }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <x-input type="text" name="tour_point_address" label="Tour Point Address:" id="tour_point_address" placeholder="Enter tour point address" value="{{$TourPoints->tour_point_address}}" pattern="" />
                            <x-input type="text" name="tour_point_history" label="Tour Point History:" id="tour_point_history" placeholder="Enter tour point address" value="{{$TourPoints->tour_point_history}}" pattern="" />
                                {{-- <div class="row">
                                    <div class="form-group col-md-6 required">
                                        <label for="tour_point_history">Tour Point History:</label><br>
                                        <input type="text" name="tour_point_history" id="tour_point_history" value="{{$TourPoints->tour_point_history}}">
                                        {{-- <textarea name="tour_point_history" id="tour_point_history" class="border rounded" cols="105" rows="2" value="{{$TourPoints->tour_point_address}}" ></textarea>
                                    </div>
                                </div> --}}
                                <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="tour_point_img">Tour Point Image:</label>
                                    <input type="file" id="tour_point_img" name="tour_point_img[]" multiple
                                        accept="image/*">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection
