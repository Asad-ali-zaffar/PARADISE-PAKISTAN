@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>Transport Booking</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Transport Booking</li>
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
                        <form action="{{url('/')}}/transport" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="source_place_name">Source Place or City:</label>

                                @php
                                    $cites= array("Islamabad  ","Ahmed Nager  ",  "Ahmadpur East  ",   "Ali Khan  ",    "Alipur  " ,  "Arifwala  " ,  "Attock  "  ,  "Bhera  ",  "Bhalwal  ",  "Bahawalnagar  "  ,  "Bahawalpur  ",  "Bhakkar  "  ,  "Burewala  "  ,  "Chillianwala  "  ,  "Chakwal  "  ,  "Chichawatni  "  ,  "Chiniot  "  ,  "Chishtian  ",   "Daska  "  ,  "Darya Khan  " ,  "Dera Ghazi  ",  "Dhaular  ",  "Dina  " ,  "Dinga  "  ,  "Dipalpur  "  ,  "Faisalabad  "  ,  "Fateh Jhang  " ,  "Ghakhar Mandi  ",  "Gojra  "  ,  "Gujranwala  ",  "Gujrat  ",  "Gujar Khan  " ,  "Hafizabad  " ,  "Haroonabad  ",  "Hasilpur  " ,  "Haveli  ",  "Lakha  "  ,  "Jalalpur  ",  "Jattan  "  ,  "Jampur  " ,   "Jaranwala  ",   "Jhang  ",   "Jhelum  ",  "Kalabagh  ",   "Karor Lal  ",   "Kasur  ",   "Kamalia  ",   "Kamoke  ",   "Khanewal  ",   "Khanpur  ",   "Kharian  ",   "Khushab  "  ,  "Kot Adu  "  ,  "Jauharabad  "  ,  "Lahore  "  ,  "Lalamusa  "  ,  "Layyah  "  ,  "Liaquat Pur  "  ,  "Lodhran  "  ,  "Malakwal  "  ,  "Mamoori  "  ,  "Mailsi  "  ,  "Mandi Bahauddin  "  ,  "mian Channu  "  ,  "Mianwali  "  ,  "Multan  " ,  "Murree  "  ,  "Muridke  "  ,  "Mianwali Bangla  "  ,  "Muzaffargarh  "  ,  "Narowal  "  ,  "Okara  "  ,  "Renala Khurd  "  ,  "Pakpattan  "  ,  "Pattoki  "  ,  "Pir Mahal  "  ,  "Qaimpur  "  ,  "Qila Didar  "  ,  "Rabwah  "  ,  "Raiwind  "  ,  "Rajanpur  "  ,"Rahim Yar Khan "  ,  "Rawalpindi  "  ,  "Sadiqabad  "  ,  "Safdarabad  "  ,  "Sahiwal  "  ,  "Sangla Hill  "  ,  "Sarai Alamgir  "  ,  "Sargodha  "  ,  "Shakargarh  "  ,  "Sheikhupura  "  ,  "Sialkot  "  ,  "Sohawa  "  ,  "Soianwala  "  ,  "Siranwali  "  ,  "Talagang  "  ,  "Taxila  "  ,  "Toba Tek  "  ,  "Vehari  "  ,  "Wah Cantonment  "  ,  "Wazirabad  " ,  "Badin  "  ,  "Bhirkan  "  ,  "Rajo Khanani  "  ,  "Chak  "  ,  "Dadu  "  ,  "Digri  "  ,  "Diplo  "  ,  "Dokri  "  ,  "Ghotki  "  ,  "Haala  "  ,  "Hyderabad  "  ,  "Islamkot  "  ,  "Jacobabad  "  ,  "Jamshoro  "  ,  "Jungshahi  "  ,  "Kandhkot  "  ,  "Kandiaro  "  ,  "Karachi  "  ,  "Kashmore  "  ,  "Keti Bandar  "  ,  "Khairpur  "  ,  "Kotri  "  ,  "Larkana  "  ,  "Matiari  "  ,  "Mehar  "  ,  "Mirpur Khas  "  ,  "Mithani  "  ,  "Mithi  "  ,  "Mehrabpur  "  ,  "Moro  "  ,  "Nagarparkar  "  ,  "Naudero  "  ,  "Naushahro Feroze  "  ,  "Naushara  "  ,  "Nawabshah  "  ,  "Nazimabad  "  ,  "Qambar  "  ,  "Qasimabad  "  ,  "Ranipur  "  ,  "Ratodero  "  ,  "Rohri  "  ,  "Sakrand  "  ,  "Sanghar  "  ,  "Shahbandar  "  ,  "Shahdadkot  "  ,  "Shahdadpur  "  ,  "Shahpur Chakar  "  ,  "Shikarpaur  "  ,  "Sukkur  "  ,  "Tangwani  "  ,  "Tando Adam  "  ,  "Tando Allahyar  "  ,  "Tando Muhammad  "  ,  "Thatta  "  ,  "Umerkot  "  ,  "Warah  "  ,  "Abbottabad  "  ,  "Adezai  "  ,  "Alpuri  "  ,  "Akora Khattak  "  ,  "Ayubia  "  ,  "Banda Daud  "  ,  "Bannu  "  ,  "Batkhela  "  ,  "Battagram  "  ,  "Birote  "  ,  "Chakdara  "  ,  "Charsadda  "  ,  "Chitral  "  ,  "Daggar  "  ,  "Dargai  "  ,  "Darya Khan  "  ,  "dera Ismail  "  ,  "Doaba  "  ,  "Dir  ",  "Drosh  "  ,  "Hangu  "  ,  "Haripur  ",  "Karak  "  ,  "Kohat  "  ,  "Kulachi  " ,  "Lakki Marwat  "  ,  "Latamber  ",  "Madyan  "  ,  "Mansehra  "  ,  "Mardan  "  ,  "Mastuj  "  ,  "Mingora  " ,  "Nowshera  "  ,  "Paharpur  ",   "Pabbi  ",   "Peshawar  ",   "Saidu Sharif  ",   "Shorkot  ",   "Shewa Adda  " ,  "Swabi  "  ,  "Swat  "  ,  "Tangi  "  ,  "Tank  "  ,  "Thall  "  ,  "Timergara  "  ,  "Tordher  "  ,  "Awaran  " ,  "Barkhan  " ,  "Chagai  "  ,  "Dera Bugti  ",   "Gwadar  "  ,  "Harnai  ",  "Jafarabad  ",   "Jhal Magsi  ",  "Kacchi  ",  "Kalat  ",   "Kech  ",  "Kharan  ",  "Khuzdar  ",   "Killa Abdullah  ",  "Killa Saifullah  ",   "Kohlu  ",   "Lasbela  ",  "Lehri  ",  "Loralai  ",   "Mastung  ",   "Musakhel  ",  "Nasirabad  ",   "Nushki  ",  "Panjgur  ",   "Pishin valley  ",   "Quetta  ",   "Sherani  ",   "Sibi  ",   "Sohbatpur  ",   "Washuk  ",   "Zhob  ",  "Ziarat  " );
                                @endphp
                                <select class="border border-5 form-control-file p-2 rounded" name="source_place_name" id="source_place_name"    >
                                    @foreach($cites  as $city )
                                    <option >{{$city}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="destination_place_name">Destination Place or City:</label>

                                @php
                                    $cites= array("Islamabad  ","Ahmed Nager  ",  "Ahmadpur East  ",   "Ali Khan  ",    "Alipur  " ,  "Arifwala  " ,  "Attock  "  ,  "Bhera  ",  "Bhalwal  ",  "Bahawalnagar  "  ,  "Bahawalpur  ",  "Bhakkar  "  ,  "Burewala  "  ,  "Chillianwala  "  ,  "Chakwal  "  ,  "Chichawatni  "  ,  "Chiniot  "  ,  "Chishtian  ",   "Daska  "  ,  "Darya Khan  " ,  "Dera Ghazi  ",  "Dhaular  ",  "Dina  " ,  "Dinga  "  ,  "Dipalpur  "  ,  "Faisalabad  "  ,  "Fateh Jhang  " ,  "Ghakhar Mandi  ",  "Gojra  "  ,  "Gujranwala  ",  "Gujrat  ",  "Gujar Khan  " ,  "Hafizabad  " ,  "Haroonabad  ",  "Hasilpur  " ,  "Haveli  ",  "Lakha  "  ,  "Jalalpur  ",  "Jattan  "  ,  "Jampur  " ,   "Jaranwala  ",   "Jhang  ",   "Jhelum  ",  "Kalabagh  ",   "Karor Lal  ",   "Kasur  ",   "Kamalia  ",   "Kamoke  ",   "Khanewal  ",   "Khanpur  ",   "Kharian  ",   "Khushab  "  ,  "Kot Adu  "  ,  "Jauharabad  "  ,  "Lahore  "  ,  "Lalamusa  "  ,  "Layyah  "  ,  "Liaquat Pur  "  ,  "Lodhran  "  ,  "Malakwal  "  ,  "Mamoori  "  ,  "Mailsi  "  ,  "Mandi Bahauddin  "  ,  "mian Channu  "  ,  "Mianwali  "  ,  "Multan  " ,  "Murree  "  ,  "Muridke  "  ,  "Mianwali Bangla  "  ,  "Muzaffargarh  "  ,  "Narowal  "  ,  "Okara  "  ,  "Renala Khurd  "  ,  "Pakpattan  "  ,  "Pattoki  "  ,  "Pir Mahal  "  ,  "Qaimpur  "  ,  "Qila Didar  "  ,  "Rabwah  "  ,  "Raiwind  "  ,  "Rajanpur  "  ,"Rahim Yar Khan "  ,  "Rawalpindi  "  ,  "Sadiqabad  "  ,  "Safdarabad  "  ,  "Sahiwal  "  ,  "Sangla Hill  "  ,  "Sarai Alamgir  "  ,  "Sargodha  "  ,  "Shakargarh  "  ,  "Sheikhupura  "  ,  "Sialkot  "  ,  "Sohawa  "  ,  "Soianwala  "  ,  "Siranwali  "  ,  "Talagang  "  ,  "Taxila  "  ,  "Toba Tek  "  ,  "Vehari  "  ,  "Wah Cantonment  "  ,  "Wazirabad  " ,  "Badin  "  ,  "Bhirkan  "  ,  "Rajo Khanani  "  ,  "Chak  "  ,  "Dadu  "  ,  "Digri  "  ,  "Diplo  "  ,  "Dokri  "  ,  "Ghotki  "  ,  "Haala  "  ,  "Hyderabad  "  ,  "Islamkot  "  ,  "Jacobabad  "  ,  "Jamshoro  "  ,  "Jungshahi  "  ,  "Kandhkot  "  ,  "Kandiaro  "  ,  "Karachi  "  ,  "Kashmore  "  ,  "Keti Bandar  "  ,  "Khairpur  "  ,  "Kotri  "  ,  "Larkana  "  ,  "Matiari  "  ,  "Mehar  "  ,  "Mirpur Khas  "  ,  "Mithani  "  ,  "Mithi  "  ,  "Mehrabpur  "  ,  "Moro  "  ,  "Nagarparkar  "  ,  "Naudero  "  ,  "Naushahro Feroze  "  ,  "Naushara  "  ,  "Nawabshah  "  ,  "Nazimabad  "  ,  "Qambar  "  ,  "Qasimabad  "  ,  "Ranipur  "  ,  "Ratodero  "  ,  "Rohri  "  ,  "Sakrand  "  ,  "Sanghar  "  ,  "Shahbandar  "  ,  "Shahdadkot  "  ,  "Shahdadpur  "  ,  "Shahpur Chakar  "  ,  "Shikarpaur  "  ,  "Sukkur  "  ,  "Tangwani  "  ,  "Tando Adam  "  ,  "Tando Allahyar  "  ,  "Tando Muhammad  "  ,  "Thatta  "  ,  "Umerkot  "  ,  "Warah  "  ,  "Abbottabad  "  ,  "Adezai  "  ,  "Alpuri  "  ,  "Akora Khattak  "  ,  "Ayubia  "  ,  "Banda Daud  "  ,  "Bannu  "  ,  "Batkhela  "  ,  "Battagram  "  ,  "Birote  "  ,  "Chakdara  "  ,  "Charsadda  "  ,  "Chitral  "  ,  "Daggar  "  ,  "Dargai  "  ,  "Darya Khan  "  ,  "dera Ismail  "  ,  "Doaba  "  ,  "Dir  ",  "Drosh  "  ,  "Hangu  "  ,  "Haripur  ",  "Karak  "  ,  "Kohat  "  ,  "Kulachi  " ,  "Lakki Marwat  "  ,  "Latamber  ",  "Madyan  "  ,  "Mansehra  "  ,  "Mardan  "  ,  "Mastuj  "  ,  "Mingora  " ,  "Nowshera  "  ,  "Paharpur  ",   "Pabbi  ",   "Peshawar  ",   "Saidu Sharif  ",   "Shorkot  ",   "Shewa Adda  " ,  "Swabi  "  ,  "Swat  "  ,  "Tangi  "  ,  "Tank  "  ,  "Thall  "  ,  "Timergara  "  ,  "Tordher  "  ,  "Awaran  " ,  "Barkhan  " ,  "Chagai  "  ,  "Dera Bugti  ",   "Gwadar  "  ,  "Harnai  ",  "Jafarabad  ",   "Jhal Magsi  ",  "Kacchi  ",  "Kalat  ",   "Kech  ",  "Kharan  ",  "Khuzdar  ",   "Killa Abdullah  ",  "Killa Saifullah  ",   "Kohlu  ",   "Lasbela  ",  "Lehri  ",  "Loralai  ",   "Mastung  ",   "Musakhel  ",  "Nasirabad  ",   "Nushki  ",  "Panjgur  ",   "Pishin valley  ",   "Quetta  ",   "Sherani  ",   "Sibi  ",   "Sohbatpur  ",   "Washuk  ",   "Zhob  ",  "Ziarat  " );
                                @endphp
                                <select class="border border-5 form-control-file p-2 rounded" name="destination_place_name" id="destination_place_name"    >
                                    @foreach($cites  as $city )
                                    <option >{{$city}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <x-input type="time" name="going_time" label="Going Time:" id="going_time" placeholder="Enter your Going Time" value="" pattern=""/>
                            <x-input type="date" name="going_date" label="Going Date:" id="going_date" placeholder="Enter your Going Date" value="" pattern=""/>


                            <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="uaddress">Booking Type:</label><br>
                                    <input type="radio" name="transport" id="car" value="Car" checked >
                                    <label for="car">Car</label>
                                    <input type="radio" name="transport" id="bus" value="Bus"  >
                                    <label for="bus">Bus</label>
                                    <input type="radio" name="transport" id="train" value="Train"  >
                                    <label for="train">Train</label>
                                    <input type="radio" name="transport" id="airplan" value="Airplan"  >
                                    <label for="airplan">Airplan</label>
                                </div>
                            </div>
                            </div>
                             <x-input type="number" name="number_of_seats" label="Number of Seats:" id="number_of_seats" placeholder="How many seats are book" value="" pattern=""/>
                             {{-- <x-input type="text" name="cnic" label="Cnic:" id="cinc" placeholder="Enter your cnic number" value="" pattern=""/> --}}
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Seat Type:</label><br>
                                    <input type="radio" name="seat_type" id="economy_seat_type" value="economy" checked >
                                    <label for="economy_seat_type">Economy</label>
                                    <input type="radio" name="seat_type" id="business_seat_type" value="business"  >
                                    <label for="business_seat_type">Business</label>
                                </div>
                                </div>
                                <x-input type="number" name="transport_total_bill" label="Total Bill:" id="transport_total_bill" placeholder="" value="" pattern=""/>
                                {{-- <script>
                                    $("#car,#bus,#train,#airplan,#number_of_seats,#economy_seat_type,#business_seat_type").on('change keyup keydown keypress', function(){
                                        var car=$('#car').val();
                                        var bus=$('#bus').val();
                                        var train=$('#train').val();
                                        var airplan=$('#airplan').val();
                                        var number_of_seats=$('#number_of_seats').val();
                                        var economy=$('#economy_seat_type').val();
                                        var business=$('#business_seat_type').val();

                                        $('#transport_total_bill').val(number_of_seats);
                                    }); --}}
                                {{-- //    function myFunction() {
                                //     window.alert(car,economy);
                                //    } --}}
                                   {{-- </script> --}}
                                   {{-- <button type="button" onclick="myFunction()">try</button> --}}


                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

