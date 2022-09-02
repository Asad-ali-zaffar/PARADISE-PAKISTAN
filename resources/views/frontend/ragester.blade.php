@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>Visiter registration Form</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Visiter registration</li>
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

                            <x-input type="text" name="name" label="Name" id="name" placeholder="Enter your name" value="" pattern=""/>
                            @error('name')
                            {{$message}}
                        @enderror
                            <x-input type="email" name="email" label="Email" id="email" placeholder="Enter your email" value="" pattern=""/>
                            <x-input type="password" name="password" label="Password" id="password" placeholder="Enter your password" value="" pattern=""/>
                            <x-input type="password" name="confim_password" label="Confim Password" id="confim-pass" placeholder="Enter your password" value="" pattern=""/>
                            <x-input type="date" name="dob" label="Date of Birth" id="dob" placeholder="Enter your dob" value="" pattern=""/>


                            <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="uaddress">Gender:</label><br>
                                    <input type="radio" name="gender" id="gender1" value="M" checked >
                                    <label for="gender1">Male</label>
                                    <input type="radio" name="gender" id="gender2" value="F"  >
                                    <label for="gender2">Female</label>
                                    <input type="radio" name="gender" id="gender3" value="O"  >
                                    <label for="gender3">Other</label>
                                    <span class="text-danger">
                                        @error('gender')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="ucountry">Country:</label>
                                <!-- <input type="text" class="form-control-file" name="ucountry" id="ucountry" placeholder="Enter Your name" aria-describedby="fileHelpId"> -->
                               @php
                                    $countries = array("Pakistan", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                @endphp
                               <select class="border border-5 form-control-file p-2 rounded" name="ucountry" id="ucountry" class="form-control-file"   >
                               @foreach($countries as $country)
                                    <option >{{$country}}</option>
                               @endforeach
                               </select>
                                <span class="text-danger">
                                    @error('ucountry')
                                        {{$message}}
                                    @enderror
                                </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="city">City:</label>

                                @php
                                    $cites= array("Islamabad  ","Ahmed Nager  ",  "Ahmadpur East  ",   "Ali Khan  ",    "Alipur  " ,  "Arifwala  " ,  "Attock  "  ,  "Bhera  ",  "Bhalwal  ",  "Bahawalnagar  "  ,  "Bahawalpur  ",  "Bhakkar  "  ,  "Burewala  "  ,  "Chillianwala  "  ,  "Chakwal  "  ,  "Chichawatni  "  ,  "Chiniot  "  ,  "Chishtian  ",   "Daska  "  ,  "Darya Khan  " ,  "Dera Ghazi  ",  "Dhaular  ",  "Dina  " ,  "Dinga  "  ,  "Dipalpur  "  ,  "Faisalabad  "  ,  "Fateh Jhang  " ,  "Ghakhar Mandi  ",  "Gojra  "  ,  "Gujranwala  ",  "Gujrat  ",  "Gujar Khan  " ,  "Hafizabad  " ,  "Haroonabad  ",  "Hasilpur  " ,  "Haveli  ",  "Lakha  "  ,  "Jalalpur  ",  "Jattan  "  ,  "Jampur  " ,   "Jaranwala  ",   "Jhang  ",   "Jhelum  ",  "Kalabagh  ",   "Karor Lal  ",   "Kasur  ",   "Kamalia  ",   "Kamoke  ",   "Khanewal  ",   "Khanpur  ",   "Kharian  ",   "Khushab  "  ,  "Kot Adu  "  ,  "Jauharabad  "  ,  "Lahore  "  ,  "Lalamusa  "  ,  "Layyah  "  ,  "Liaquat Pur  "  ,  "Lodhran  "  ,  "Malakwal  "  ,  "Mamoori  "  ,  "Mailsi  "  ,  "Mandi Bahauddin  "  ,  "mian Channu  "  ,  "Mianwali  "  ,  "Multan  " ,  "Murree  "  ,  "Muridke  "  ,  "Mianwali Bangla  "  ,  "Muzaffargarh  "  ,  "Narowal  "  ,  "Okara  "  ,  "Renala Khurd  "  ,  "Pakpattan  "  ,  "Pattoki  "  ,  "Pir Mahal  "  ,  "Qaimpur  "  ,  "Qila Didar  "  ,  "Rabwah  "  ,  "Raiwind  "  ,  "Rajanpur  "  ,"Rahim Yar Khan "  ,  "Rawalpindi  "  ,  "Sadiqabad  "  ,  "Safdarabad  "  ,  "Sahiwal  "  ,  "Sangla Hill  "  ,  "Sarai Alamgir  "  ,  "Sargodha  "  ,  "Shakargarh  "  ,  "Sheikhupura  "  ,  "Sialkot  "  ,  "Sohawa  "  ,  "Soianwala  "  ,  "Siranwali  "  ,  "Talagang  "  ,  "Taxila  "  ,  "Toba Tek  "  ,  "Vehari  "  ,  "Wah Cantonment  "  ,  "Wazirabad  " ,  "Badin  "  ,  "Bhirkan  "  ,  "Rajo Khanani  "  ,  "Chak  "  ,  "Dadu  "  ,  "Digri  "  ,  "Diplo  "  ,  "Dokri  "  ,  "Ghotki  "  ,  "Haala  "  ,  "Hyderabad  "  ,  "Islamkot  "  ,  "Jacobabad  "  ,  "Jamshoro  "  ,  "Jungshahi  "  ,  "Kandhkot  "  ,  "Kandiaro  "  ,  "Karachi  "  ,  "Kashmore  "  ,  "Keti Bandar  "  ,  "Khairpur  "  ,  "Kotri  "  ,  "Larkana  "  ,  "Matiari  "  ,  "Mehar  "  ,  "Mirpur Khas  "  ,  "Mithani  "  ,  "Mithi  "  ,  "Mehrabpur  "  ,  "Moro  "  ,  "Nagarparkar  "  ,  "Naudero  "  ,  "Naushahro Feroze  "  ,  "Naushara  "  ,  "Nawabshah  "  ,  "Nazimabad  "  ,  "Qambar  "  ,  "Qasimabad  "  ,  "Ranipur  "  ,  "Ratodero  "  ,  "Rohri  "  ,  "Sakrand  "  ,  "Sanghar  "  ,  "Shahbandar  "  ,  "Shahdadkot  "  ,  "Shahdadpur  "  ,  "Shahpur Chakar  "  ,  "Shikarpaur  "  ,  "Sukkur  "  ,  "Tangwani  "  ,  "Tando Adam  "  ,  "Tando Allahyar  "  ,  "Tando Muhammad  "  ,  "Thatta  "  ,  "Umerkot  "  ,  "Warah  "  ,  "Abbottabad  "  ,  "Adezai  "  ,  "Alpuri  "  ,  "Akora Khattak  "  ,  "Ayubia  "  ,  "Banda Daud  "  ,  "Bannu  "  ,  "Batkhela  "  ,  "Battagram  "  ,  "Birote  "  ,  "Chakdara  "  ,  "Charsadda  "  ,  "Chitral  "  ,  "Daggar  "  ,  "Dargai  "  ,  "Darya Khan  "  ,  "dera Ismail  "  ,  "Doaba  "  ,  "Dir  ",  "Drosh  "  ,  "Hangu  "  ,  "Haripur  ",  "Karak  "  ,  "Kohat  "  ,  "Kulachi  " ,  "Lakki Marwat  "  ,  "Latamber  ",  "Madyan  "  ,  "Mansehra  "  ,  "Mardan  "  ,  "Mastuj  "  ,  "Mingora  " ,  "Nowshera  "  ,  "Paharpur  ",   "Pabbi  ",   "Peshawar  ",   "Saidu Sharif  ",   "Shorkot  ",   "Shewa Adda  " ,  "Swabi  "  ,  "Swat  "  ,  "Tangi  "  ,  "Tank  "  ,  "Thall  "  ,  "Timergara  "  ,  "Tordher  "  ,  "Awaran  " ,  "Barkhan  " ,  "Chagai  "  ,  "Dera Bugti  ",   "Gwadar  "  ,  "Harnai  ",  "Jafarabad  ",   "Jhal Magsi  ",  "Kacchi  ",  "Kalat  ",   "Kech  ",  "Kharan  ",  "Khuzdar  ",   "Killa Abdullah  ",  "Killa Saifullah  ",   "Kohlu  ",   "Lasbela  ",  "Lehri  ",  "Loralai  ",   "Mastung  ",   "Musakhel  ",  "Nasirabad  ",   "Nushki  ",  "Panjgur  ",   "Pishin valley  ",   "Quetta  ",   "Sherani  ",   "Sibi  ",   "Sohbatpur  ",   "Washuk  ",   "Zhob  ",  "Ziarat  " );
                                @endphp
                                <select class="border border-5 form-control-file p-2 rounded" name="city" id="city" class="form-control-file"   >
                                    @foreach($cites  as $city )
                                    <option >{{$city}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                             {{-- <x-input type="text" name="city" label="City" id="city" placeholder="Enter your city name" value="" pattern=""/> --}}
                             <x-input type="text" name="address" label="Address" id="address" placeholder="Enter your address" value="" pattern=""/>
                             <x-input type="number" name="phon_number" label="Phone number" id="phone" placeholder="Enter your phone number" value="" pattern=""/>
                             <x-input type="text" name="cnic" label="Cnic" id="cinc" placeholder="Enter your cnic number" value="" pattern=""/>
                             <x-input type="file" name="img" label="Image" id="img" placeholder="" value="" pattern=""/>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

