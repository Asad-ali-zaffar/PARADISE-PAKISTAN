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
    {{-- view section --}}
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">



                <table class="table" id="myTable">
                    {{-- <pre>
                        {{print_r($visiter)}}
                    </pre> --}}
                    @php
                        $i = 1;
                    @endphp
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hotel Name</th>
                            <th>Hotel Address</th>
                            <th>City</th>
                            <th>Phon Number</th>
                            <th>Hotels</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            // echo '<pre>';
                            // print_r($tbl_Hoteles);
                            // die();
                        @endphp --}}
                        @foreach ($tbl_Hoteles as $tbl_Hotel)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $tbl_Hotel->hotel_name }}</td>
                                <td>{{ $tbl_Hotel->hotel_address }}</td>
                                <td>{{ $tbl_Hotel->hotel_cityName }}</td>
                                <td>{{ $tbl_Hotel->hotel_contact_number }}</td>
                                <td>
                                    @if ($tbl_Hotel->hotel_type == 'one')
                                        One Star
                                    @elseif ($tbl_Hotel->hotel_type == 'two')
                                        Tow Star
                                    @elseif ($tbl_Hotel->hotel_type == 'Three')
                                        Three Star
                                    @elseif ($tbl_Hotel->hotel_type == 'four')
                                        Four Star
                                    @elseif ($tbl_Hotel->hotel_type == 'five')
                                        Five Star
                                    @elseif ($tbl_Hotel->hotel_type == 'six')
                                        Six Star
                                    @else
                                        Seven Star

                                    @endif
                                </td>
                                <td>
                                    @if ($tbl_Hotel->hotel_status == '1')
                                        <a href="{{url('/hotel_register_status')}}/{{$tbl_Hotel->hotel_id}}">
                                            <span class="badge badge-success">Room available</span>
                                        </a>
                                    @else
                                        <a href="{{url('/hotel_register_status')}}/{{$tbl_Hotel->hotel_id}}">
                                            <span class="badge badge-danger">Not available</span>
                                        </a>
                                    @endif
                                </td>
                                {{-- @php
                                    $image[] = explode(',', );
                                @endphp
                                {{-- @php
                                    $d = 0;
                                @endphp --}}
                                {{-- @foreach ($image as $key=>$imag) --}}

                                    <td><img class="rounded-circle" src="{{ url('/visiters').'/'.$tbl_Hotel->hotel_img}}">
                                    </td>
                                    {{-- @php
                                        $d++;
                                    @endphp --}}
                                {{-- @endforeach --}}

                                <td>

                                    <a href="{{ url('/hotel_register_delete') }}/{{ $tbl_Hotel->hotel_id }}"><button
                                            class="btn btn-danger">Delete</button></a>
                                    <a href="{{ url('/hotel_register_edit') }}/{{ $tbl_Hotel->hotel_id }}"><button
                                            class="btn btn-primary">Edit</button></a>
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
