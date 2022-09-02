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
                            <th>Room Owner Name</th>
                            <th>Room Address</th>
                            <th>Room Rent</th>
                            <th>Owner Phon Number</th>
                            <th>Room Status</th>
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
                        @foreach ($localrooms as $localroom)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $localroom->room_ownerName }}</td>
                                <td>{{ $localroom->room_address }}</td>
                                <td>{{ $localroom->room_rent }}</td>
                                <td>{{ $localroom->room_ownerNo }}</td>
                                <td>
                                    @if ($localroom->room_status == '1')
                                        <a href="{{url('/LocalRoom_status')}}/{{$localroom->room_id}}">
                                            <span class="badge badge-danger">Room Booked</span>
                                        </a>
                                    @else
                                        <a href="{{url('LocalRoom_status')}}/{{$localroom->room_id}}">
                                            <span class="badge badge-success">Room available</span>
                                        </a>
                                    @endif
                                </td>
                                {{-- @php
                                    $image[] = explode(',', $localroom->room_img);
                                @endphp
                                @php
                                    $d = 0;
                                @endphp
                                @foreach ($image as $imag) --}}

                                    <td><img class="rounded-circle" src="{{ url('/local_room') . '/' . $localroom->room_img }}">
                                    </td>
                                    {{-- @php
                                        $d++;
                                    @endphp
                                @endforeach --}}

                                <td>

                                    <a href="{{ url('LocalRoom_delete') }}/{{ $localroom->room_id }}"><button
                                            class="btn btn-danger">Delete</button></a>
                                    <a href="{{ url('LocalRoom_edit') }}/{{ $localroom->room_id }}"><button
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
