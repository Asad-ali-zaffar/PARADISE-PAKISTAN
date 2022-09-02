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
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                 <!--Content Side / Blog Classic -->
                 <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-classic padding-right">
                        <form action="{{$url}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @foreach ($City as $Cityes )


                            {{-- <x-input type="text" name="city_name" label="City" id="city_name" placeholder="Enter city name" value="{{$Cityes->city_name}}" pattern=""/> --}}
                                <div class="row">
                                    <div class="form-group col-md-12 required ">
                                    <label for="city">City:</label>

                                    @php
                                        $cites= array("Islamabad  ","Ahmed Nager  ",  "Ahmadpur East  ",   "Ali Khan  ",    "Alipur  " ,  "Arifwala  " ,  "Attock  "  ,  "Bhera  ",  "Bhalwal  ",  "Bahawalnagar  "  ,  "Bahawalpur  ",  "Bhakkar  "  ,  "Burewala  "  ,  "Chillianwala  "  ,  "Chakwal  "  ,  "Chichawatni  "  ,  "Chiniot  "  ,  "Chishtian  ",   "Daska  "  ,  "Darya Khan  " ,  "Dera Ghazi  ",  "Dhaular  ",  "Dina  " ,  "Dinga  "  ,  "Dipalpur  "  ,  "Faisalabad  "  ,  "Fateh Jhang  " ,  "Ghakhar Mandi  ",  "Gojra  "  ,  "Gujranwala  ",  "Gujrat  ",  "Gujar Khan  " ,  "Hafizabad  " ,  "Haroonabad  ",  "Hasilpur  " ,  "Haveli  ",  "Lakha  "  ,  "Jalalpur  ",  "Jattan  "  ,  "Jampur  " ,   "Jaranwala  ",   "Jhang  ",   "Jhelum  ",  "Kalabagh  ",   "Karor Lal  ",   "Kasur  ",   "Kamalia  ",   "Kamoke  ",   "Khanewal  ",   "Khanpur  ",   "Kharian  ",   "Khushab  "  ,  "Kot Adu  "  ,  "Jauharabad  "  ,  "Lahore  "  ,  "Lalamusa  "  ,  "Layyah  "  ,  "Liaquat Pur  "  ,  "Lodhran  "  ,  "Malakwal  "  ,  "Mamoori  "  ,  "Mailsi  "  ,  "Mandi Bahauddin  "  ,  "mian Channu  "  ,  "Mianwali  "  ,  "Multan  " ,  "Murree  "  ,  "Muridke  "  ,  "Mianwali Bangla  "  ,  "Muzaffargarh  "  ,  "Narowal  "  ,  "Okara  "  ,  "Renala Khurd  "  ,  "Pakpattan  "  ,  "Pattoki  "  ,  "Pir Mahal  "  ,  "Qaimpur  "  ,  "Qila Didar  "  ,  "Rabwah  "  ,  "Raiwind  "  ,  "Rajanpur  "  ,"Rahim Yar Khan "  ,  "Rawalpindi  "  ,  "Sadiqabad  "  ,  "Safdarabad  "  ,  "Sahiwal  "  ,  "Sangla Hill  "  ,  "Sarai Alamgir  "  ,  "Sargodha  "  ,  "Shakargarh  "  ,  "Sheikhupura  "  ,  "Sialkot  "  ,  "Sohawa  "  ,  "Soianwala  "  ,  "Siranwali  "  ,  "Talagang  "  ,  "Taxila  "  ,  "Toba Tek  "  ,  "Vehari  "  ,  "Wah Cantonment  "  ,  "Wazirabad  " ,  "Badin  "  ,  "Bhirkan  "  ,  "Rajo Khanani  "  ,  "Chak  "  ,  "Dadu  "  ,  "Digri  "  ,  "Diplo  "  ,  "Dokri  "  ,  "Ghotki  "  ,  "Haala  "  ,  "Hyderabad  "  ,  "Islamkot  "  ,  "Jacobabad  "  ,  "Jamshoro  "  ,  "Jungshahi  "  ,  "Kandhkot  "  ,  "Kandiaro  "  ,  "Karachi  "  ,  "Kashmore  "  ,  "Keti Bandar  "  ,  "Khairpur  "  ,  "Kotri  "  ,  "Larkana  "  ,  "Matiari  "  ,  "Mehar  "  ,  "Mirpur Khas  "  ,  "Mithani  "  ,  "Mithi  "  ,  "Mehrabpur  "  ,  "Moro  "  ,  "Nagarparkar  "  ,  "Naudero  "  ,  "Naushahro Feroze  "  ,  "Naushara  "  ,  "Nawabshah  "  ,  "Nazimabad  "  ,  "Qambar  "  ,  "Qasimabad  "  ,  "Ranipur  "  ,  "Ratodero  "  ,  "Rohri  "  ,  "Sakrand  "  ,  "Sanghar  "  ,  "Shahbandar  "  ,  "Shahdadkot  "  ,  "Shahdadpur  "  ,  "Shahpur Chakar  "  ,  "Shikarpaur  "  ,  "Sukkur  "  ,  "Tangwani  "  ,  "Tando Adam  "  ,  "Tando Allahyar  "  ,  "Tando Muhammad  "  ,  "Thatta  "  ,  "Umerkot  "  ,  "Warah  "  ,  "Abbottabad  "  ,  "Adezai  "  ,  "Alpuri  "  ,  "Akora Khattak  "  ,  "Ayubia  "  ,  "Banda Daud  "  ,  "Bannu  "  ,  "Batkhela  "  ,  "Battagram  "  ,  "Birote  "  ,  "Chakdara  "  ,  "Charsadda  "  ,  "Chitral  "  ,  "Daggar  "  ,  "Dargai  "  ,  "Darya Khan  "  ,  "dera Ismail  "  ,  "Doaba  "  ,  "Dir  ",  "Drosh  "  ,  "Hangu  "  ,  "Haripur  ",  "Karak  "  ,  "Kohat  "  ,  "Kulachi  " ,  "Lakki Marwat  "  ,  "Latamber  ",  "Madyan  "  ,  "Mansehra  "  ,  "Mardan  "  ,  "Mastuj  "  ,  "Mingora  " ,  "Nowshera  "  ,  "Paharpur  ",   "Pabbi  ",   "Peshawar  ",   "Saidu Sharif  ",   "Shorkot  ",   "Shewa Adda  " ,  "Swabi  "  ,  "Swat  "  ,  "Tangi  "  ,  "Tank  "  ,  "Thall  "  ,  "Timergara  "  ,  "Tordher  "  ,  "Awaran  " ,  "Barkhan  " ,  "Chagai  "  ,  "Dera Bugti  ",   "Gwadar  "  ,  "Harnai  ",  "Jafarabad  ",   "Jhal Magsi  ",  "Kacchi  ",  "Kalat  ",   "Kech  ",  "Kharan  ",  "Khuzdar  ",   "Killa Abdullah  ",  "Killa Saifullah  ",   "Kohlu  ",   "Lasbela  ",  "Lehri  ",  "Loralai  ",   "Mastung  ",   "Musakhel  ",  "Nasirabad  ",   "Nushki  ",  "Panjgur  ",   "Pishin valley  ",   "Quetta  ",   "Sherani  ",   "Sibi  ",   "Sohbatpur  ",   "Washuk  ",   "Zhob  ",  "Ziarat  " );
                                    @endphp
                                    <select class="border border-5 form-control-file p-2 rounded" name="city_name" id="city" class="form-control-file"   >
                                        @foreach($cites  as $city )
                                        <option >{{$city}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city_tourPointsID ">Tour Points:</label>
                               <select class="border border-5 form-control-file p-2 rounded" name="city_tourPointsID" id="city_tourPointsID " class="form-control-file"   >
                               @foreach($TourPoint as $country)
                                    <option value="{{$country->tour_point_id}}" >{{$country->tour_point_name}}</option>
                               @endforeach
                               </select>
                               </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city_tour_guiderID">Tour Guider:</label>
                                <select class="border border-5 form-control-file p-2 rounded" name="city_tour_guiderID" id="city_tour_guiderID" class="form-control-file"   >
                                    @foreach($guider  as $city )
                                    <option value="{{$city->guider_id}}">{{$city->guider_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city_local_roomID ">Local Room:</label>
                                <select class="border border-5 form-control-file p-2 rounded" name="city_local_roomID" id="city_local_roomID " class="form-control-file"   >
                                    @foreach($Local  as $city )
                                    <option value="{{$city->room_id}}">{{$city->room_address}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city_hotelID">Hotel:</label>
                                <select class="border border-5 form-control-file p-2 rounded" name="city_hotelID" id="city_hotelID" class="form-control-file"   >
                                    @foreach($Tbl_Hotel as $city )
                                    <option value="{{$city->hotel_id}}" >{{$city->hotel_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city_ceare_centersID">Health Care Center:</label>
                                <select class="border border-5 form-control-file p-2 rounded" name="city_ceare_centersID" id="city_ceare_centersID" class="form-control-file"   >
                                    @foreach($Health  as $city )
                                    <option value="{{$city->care_center_Id}}">{{$city->health_care_center_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                              <x-input type="text" name="city_history" label="City History:" id="city_history" placeholder="Enter city history" value="{{$Cityes->city_history}}" pattern=""/>
                             <x-input type="file" name="city_image" label="Image" id="img" placeholder="" value="" pattern=""/>
                             @endforeach
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

