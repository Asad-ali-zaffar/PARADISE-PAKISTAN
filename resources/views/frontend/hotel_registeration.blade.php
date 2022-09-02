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
                            <x-input type="text" name="hotel_name" label="Hotel Name:" id="hotel_name" placeholder="Enter Your hotel name" value="" pattern=""/>
                            <x-input type="text" name="hotel_address" label="Hotel Address:" id="hotel_address" placeholder="Enter Your Hotel Address" value="" pattern=""/>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city">City:</label>

                                @php
                                    $cites= array("Islamabad  ","Ahmed Nager  ",  "Ahmadpur East  ",   "Ali Khan  ",    "Alipur  " ,  "Arifwala  " ,  "Attock  "  ,  "Bhera  ",  "Bhalwal  ",  "Bahawalnagar  "  ,  "Bahawalpur  ",  "Bhakkar  "  ,  "Burewala  "  ,  "Chillianwala  "  ,  "Chakwal  "  ,  "Chichawatni  "  ,  "Chiniot  "  ,  "Chishtian  ",   "Daska  "  ,  "Darya Khan  " ,  "Dera Ghazi  ",  "Dhaular  ",  "Dina  " ,  "Dinga  "  ,  "Dipalpur  "  ,  "Faisalabad  "  ,  "Fateh Jhang  " ,  "Ghakhar Mandi  ",  "Gojra  "  ,  "Gujranwala  ",  "Gujrat  ",  "Gujar Khan  " ,  "Hafizabad  " ,  "Haroonabad  ",  "Hasilpur  " ,  "Haveli  ",  "Lakha  "  ,  "Jalalpur  ",  "Jattan  "  ,  "Jampur  " ,   "Jaranwala  ",   "Jhang  ",   "Jhelum  ",  "Kalabagh  ",   "Karor Lal  ",   "Kasur  ",   "Kamalia  ",   "Kamoke  ",   "Khanewal  ",   "Khanpur  ",   "Kharian  ",   "Khushab  "  ,  "Kot Adu  "  ,  "Jauharabad  "  ,  "Lahore  "  ,  "Lalamusa  "  ,  "Layyah  "  ,  "Liaquat Pur  "  ,  "Lodhran  "  ,  "Malakwal  "  ,  "Mamoori  "  ,  "Mailsi  "  ,  "Mandi Bahauddin  "  ,  "mian Channu  "  ,  "Mianwali  "  ,  "Multan  " ,  "Murree  "  ,  "Muridke  "  ,  "Mianwali Bangla  "  ,  "Muzaffargarh  "  ,  "Narowal  "  ,  "Okara  "  ,  "Renala Khurd  "  ,  "Pakpattan  "  ,  "Pattoki  "  ,  "Pir Mahal  "  ,  "Qaimpur  "  ,  "Qila Didar  "  ,  "Rabwah  "  ,  "Raiwind  "  ,  "Rajanpur  "  ,"Rahim Yar Khan "  ,  "Rawalpindi  "  ,  "Sadiqabad  "  ,  "Safdarabad  "  ,  "Sahiwal  "  ,  "Sangla Hill  "  ,  "Sarai Alamgir  "  ,  "Sargodha  "  ,  "Shakargarh  "  ,  "Sheikhupura  "  ,  "Sialkot  "  ,  "Sohawa  "  ,  "Soianwala  "  ,  "Siranwali  "  ,  "Talagang  "  ,  "Taxila  "  ,  "Toba Tek  "  ,  "Vehari  "  ,  "Wah Cantonment  "  ,  "Wazirabad  " ,  "Badin  "  ,  "Bhirkan  "  ,  "Rajo Khanani  "  ,  "Chak  "  ,  "Dadu  "  ,  "Digri  "  ,  "Diplo  "  ,  "Dokri  "  ,  "Ghotki  "  ,  "Haala  "  ,  "Hyderabad  "  ,  "Islamkot  "  ,  "Jacobabad  "  ,  "Jamshoro  "  ,  "Jungshahi  "  ,  "Kandhkot  "  ,  "Kandiaro  "  ,  "Karachi  "  ,  "Kashmore  "  ,  "Keti Bandar  "  ,  "Khairpur  "  ,  "Kotri  "  ,  "Larkana  "  ,  "Matiari  "  ,  "Mehar  "  ,  "Mirpur Khas  "  ,  "Mithani  "  ,  "Mithi  "  ,  "Mehrabpur  "  ,  "Moro  "  ,  "Nagarparkar  "  ,  "Naudero  "  ,  "Naushahro Feroze  "  ,  "Naushara  "  ,  "Nawabshah  "  ,  "Nazimabad  "  ,  "Qambar  "  ,  "Qasimabad  "  ,  "Ranipur  "  ,  "Ratodero  "  ,  "Rohri  "  ,  "Sakrand  "  ,  "Sanghar  "  ,  "Shahbandar  "  ,  "Shahdadkot  "  ,  "Shahdadpur  "  ,  "Shahpur Chakar  "  ,  "Shikarpaur  "  ,  "Sukkur  "  ,  "Tangwani  "  ,  "Tando Adam  "  ,  "Tando Allahyar  "  ,  "Tando Muhammad  "  ,  "Thatta  "  ,  "Umerkot  "  ,  "Warah  "  ,  "Abbottabad  "  ,  "Adezai  "  ,  "Alpuri  "  ,  "Akora Khattak  "  ,  "Ayubia  "  ,  "Banda Daud  "  ,  "Bannu  "  ,  "Batkhela  "  ,  "Battagram  "  ,  "Birote  "  ,  "Chakdara  "  ,  "Charsadda  "  ,  "Chitral  "  ,  "Daggar  "  ,  "Dargai  "  ,  "Darya Khan  "  ,  "dera Ismail  "  ,  "Doaba  "  ,  "Dir  ",  "Drosh  "  ,  "Hangu  "  ,  "Haripur  ",  "Karak  "  ,  "Kohat  "  ,  "Kulachi  " ,  "Lakki Marwat  "  ,  "Latamber  ",  "Madyan  "  ,  "Mansehra  "  ,  "Mardan  "  ,  "Mastuj  "  ,  "Mingora  " ,  "Nowshera  "  ,  "Paharpur  ",   "Pabbi  ",   "Peshawar  ",   "Saidu Sharif  ",   "Shorkot  ",   "Shewa Adda  " ,  "Swabi  "  ,  "Swat  "  ,  "Tangi  "  ,  "Tank  "  ,  "Thall  "  ,  "Timergara  "  ,  "Tordher  "  ,  "Awaran  " ,  "Barkhan  " ,  "Chagai  "  ,  "Dera Bugti  ",   "Gwadar  "  ,  "Harnai  ",  "Jafarabad  ",   "Jhal Magsi  ",  "Kacchi  ",  "Kalat  ",   "Kech  ",  "Kharan  ",  "Khuzdar  ",   "Killa Abdullah  ",  "Killa Saifullah  ",   "Kohlu  ",   "Lasbela  ",  "Lehri  ",  "Loralai  ",   "Mastung  ",   "Musakhel  ",  "Nasirabad  ",   "Nushki  ",  "Panjgur  ",   "Pishin valley  ",   "Quetta  ",   "Sherani  ",   "Sibi  ",   "Sohbatpur  ",   "Washuk  ",   "Zhob  ",  "Ziarat  " );
                                @endphp
                                <select class="border border-5 form-control-file p-2 rounded" name="hotel_cityName" id="city" class="form-control-file"   >
                                    @foreach($cites  as $city )
                                    <option >{{$city}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            {{-- <x-input type="text" name="hotel_cityName" label="City Name:" id="hotel_cityName" placeholder="Enter City Name" value="" pattern=""/> --}}
                            <x-input type="number" name="hotel_contact_number" label="Contact Number:" id="hotel_contact_number" placeholder="Enter Hotel Contact Number" value="" pattern=""/>

                            <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="">Hotel Type:</label><br>
                                    <input type="radio" name="hotel_type" id="one" value="one" checked >
                                    <label for="one">One Star</label>
                                    <input type="radio" name="hotel_type" id="two" value="two"  >
                                    <label for="two">Two Stars</label>
                                    <input type="radio" name="hotel_type" id="three" value="three">
                                    <label for="three">Three Stars</label>
                                    <input type="radio" name="hotel_type" id="four" value="four">
                                    <label for="four">Four Stars</label>
                                    <input type="radio" name="hotel_type" id="five" value="five">
                                    <label for="five">Five Stars</label>
                                    <input type="radio" name="hotel_type" id="six" value="six">
                                    <label for="six">Six Stars</label>
                                    <input type="radio" name="hotel_type" id="seven" value="seven">
                                    <label for="seven">Seven Stars</label>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Hotel Status:</label><br>
                                    <input type="radio" name="roomtype" id="single" value="1" checked >
                                    <label for="single">Room available</label>
                                    <input type="radio" name="roomtype" id="double" value="0"  >
                                    <label for="double">Not available</label>
                                </div>
                             </div>
                             {{-- <x-input type="file" name="hotel_img" label="Hotel Image:" id="hotel_img" placeholder="" value="" pattern=""/> --}}
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="hotel_img">Hotel Image:</label>
                                <input type="file" id="hotel_img" name="hotel_img" multiple  accept="image/*" >
                                </div>
                             </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

