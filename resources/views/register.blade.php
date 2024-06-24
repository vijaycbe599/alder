<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aldar - Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fonts/fonts.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/style.css">
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-JCEXFY9TSY"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-JCEXFY9TSY'); </script>
</head>

<body>
    <header>
        <div class="main-header">
            <div class="container-fluid">
                <div class="custom-nav">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="logo">
                                <a href="{{ URL::to('/') }}">Go to Aldar.com <span
                                        class="fa-solid fa-arrow-right-long ms-3"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php 
    $countries = [    
"United Arab Emirates"
,
"Afghanistan"
,
"Albania"
,
"Algeria"
,
"American Samoa"
,
"Andorra"
,
"Angola"
,
"Anguilla"
,    
"Antarctica"
,
"Antigua and Barbuda"
,
"Argentina"
,
"Armenia"
,
"Aruba"
,
"Australia"
,
"Austria"
,
"Azerbaijan"
,
"Bahamas"
,    
"Bahrain"
,
"Bangladesh"
,
"Barbados"
,
"Belarus"
,
"Belgium"
,
"Belize"
,
"Benin"
,
"Bermuda"
,
"Bhutan"
,
"Bolivia"
,    
"Bosnia and Herzegovina"
,
"Botswana"
,
"Bouvet Island"
,
"Brazil"
,
"British Indian Ocean Territory"
,    
"British Virgin Islands"
,
"Brunei"
,
"Bulgaria"
,
"Burkina Faso"
,
"Burundi"
,
"Cambodia"
,
"Cameroon"
,
"Canada"
,    
"Cape Verde"
,
"Cayman Islands"
,
"Central African Republic"
,
"Chad"
,
"Chile"
,
"China"
,
"Christmas Island"
,    
"Cocos [Keeling] Islands"
,
"Colombia"
,
"Comoros"
,
"Congo [DRC]"
,
"Congo [Republic]"
,
"Cook Islands"
,
"Costa Rica"
,    
"Croatia"
,
"Cuba"
,
"Cyprus"
,
"Czech Republic"
,
"Côte d'Ivoire"
,
"Denmark"
,
"Djibouti"
,
"Dominica"
,
"Dominican Republic"
,    
"Ecuador"
,
"Egypt"
,
"El Salvador"
,
"Equatorial Guinea"
,
"Eritrea"
,
"Estonia"
,
"Ethiopia"
,
"Falkland Islands [Islas Malvinas]"
,    
"Faroe Islands"
,
"Fiji"
,
"Finland"
,
"France"
,
"French Guiana"
,
"French Polynesia"
,
"French Southern Territories"
,
"Gabon"
,    
"Gambia"
,
"Gaza Strip"
,
"Georgia"
,
"Germany"
,
"Ghana"
,
"Gibraltar"
,
"Greece"
,
"Greenland"
,
"Grenada"
,
"Guadeloupe"
,
"Guam"
,    
"Guatemala"
,
"Guernsey"
,
"Guinea"
,
"Guinea-Bissau"
,
"Guyana"
,
"Haiti"
,
"Heard Island and McDonald Islands"
,
"Honduras"
,    
"Hong Kong"
,
"Hungary"
,
"Iceland"
,
"India"
,
"Indonesia"
,
"Iran"
,
"Iraq"
,
"Ireland"
,
"Isle of Man"
,
"Israel"
,
"Italy"
,    
"Jamaica"
,
"Japan"
,
"Jersey"
,
"Jordan"
,
"Kazakhstan"
,
"Kenya"
,
"Kiribati"
,
"Kosovo"
,
"Kuwait"
,
"Kyrgyzstan"
,
"Laos"
,    
"Latvia"
,
"Lebanon"
,
"Lesotho"
,
"Liberia"
,
"Libya"
,
"Liechtenstein"
,
"Lithuania"
,
"Luxembourg"
,
"Macau"
,    
"Macedonia [FYROM]"
,
"Madagascar"
,
"Malawi"
,
"Malaysia"
,
"Maldives"
,
"Mali"
,
"Malta"
,
"Marshall Islands"
,
"Martinique"
,    
"Mauritania"
,
"Mauritius"
,
"Mayotte"
,
"Mexico"
,
"Micronesia"
,
"Moldova"
,
"Monaco"
,
"Mongolia"
,
"Montenegro"
,
"Montserrat"
,    
"Morocco"
,
"Mozambique"
,
"Myanmar [Burma]"
,
"Namibia"
,
"Nauru"
,
"Nepal"
,
"Netherlands"
,
"Netherlands Antilles"
,    
"New Caledonia"
,
"New Zealand"
,
"Nicaragua"
,
"Niger"
,
"Nigeria"
,
"Niue"
,
"Norfolk Island"
,
"North Korea"
,    
"Northern Mariana Islands"
,
"Norway"
,
"Oman"
,
"Pakistan"
,
"Palau"
,
"Palestinian Territories"
,
"Panama"
,    
"Papua New Guinea"
,
"Paraguay"
,
"Peru"
,
"Philippines"
,
"Pitcairn Islands"
,
"Poland"
,
"Portugal"
,
"Puerto Rico"
,    
"Qatar"
,
"Romania"
,
"Russia"
,
"Rwanda"
,
"Réunion"
,
"Saint Helena"
,
"Saint Kitts and Nevis"
,
"Saint Lucia"
,    
"Saint Pierre and Miquelon"
,
"Saint Vincent and the Grenadines"
,
"Samoa"
,
"San Marino"
,
"Saudi Arabia"
,
"Senegal"
,    
"Serbia"
,
"Seychelles"
,
"Sierra Leone"
,
"Singapore"
,
"Slovakia"
,
"Slovenia"
,
"Solomon Islands"
,
"Somalia"
,
"South Africa"
,    
"South Georgia and the South Sandwich Islands"
,
"South Korea"
,
"Spain"
,
"Sri Lanka"
,
"Sudan"
,
"Suriname"
,
"Svalbard and Jan Mayen"
,    
"Swaziland"
,
"Sweden"
,
"Switzerland"
,
"Syria"
,
"São Tomé and Príncipe"
,
"Taiwan"
,
"Tajikistan"
,
"Tanzania"
,
"Thailand"
,    
"Timor-Leste"
,
"Togo"
,
"Tokelau"
,
"Tonga"
,
"Trinidad and Tobago"
,
"Tunisia"
,
"Turkey"
,
"Turkmenistan"
,
"Turks and Caicos Islands"
,    
"Tuvalu"
,
"U.S. Minor Outlying Islands"
,
"U.S. Virgin Islands"
,
"Uganda"
,
"Ukraine"
,
"United Kingdom"
,
"United States"
,    
"Uruguay"
,
"Uzbekistan"
,
"Vanuatu"
,
"Vatican City"
,
"Venezuela"
,
"Vietnam"
,
"Wallis and Futuna"
,
"Western Sahara"
,
"Yemen"
,
"Zambia"
,
"Zimbabwe"
,
"Palestinian Territory, Occupied"
,
"Syrian Arab Republic"
,
"Iran, Islamic Republic of"
,
"Russian Federation"
];
    ?>
    <?php
$nationalitys = [
    "United Arab Emirates",
    "Afghanistan",
    "Albania",
    "Algeria",
    "American Samoa",
    "Andorra",
    "Angola",
    "Anguilla",
    "Antarctica",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Aruba",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bermuda",
    "Bhutan",
    "Bolivia",
    "Bosnia and Herzegovina",
    "Botswana",
    "Bouvet Island",
    "Brazil",
    "British Indian Ocean Territory",
    "British Virgin Islands",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cambodia",
    "Cameroon",
    "Canada",
    "Cape Verde",
    "Cayman Islands",
    "Central African Republic",
    "Chad",
    "Chile",
    "China",
    "Christmas Island",
    "Cocos [Keeling] Islands",
    "Colombia",
    "Comoros",
    "Congo [DRC]",
    "Congo [Republic]",
    "Cook Islands",
    "Costa Rica",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czech Republic",
    "Côte d'Ivoire",
    "Denmark",
    "Djibouti",
    "Dominica",
    "Dominican Republic",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Eritrea",
    "Estonia",
    "Ethiopia",
    "Falkland Islands [Islas Malvinas]",
    "Faroe Islands",
    "Fiji",
    "Finland",
    "France",
    "French Guiana",
    "French Polynesia",
    "French Southern Territories",
    "Gabon",
    "Gambia",
    "Gaza Strip",
    "Georgia",
    "Germany",
    "Ghana",
    "Gibraltar",
    "Greece",
    "Greenland",
    "Grenada",
    "Guadeloupe",
    "Guam",
    "Guatemala",
    "Guernsey",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Haiti",
    "Heard Island and McDonald Islands",
    "Honduras",
    "Hong Kong",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iran",
    "Iraq",
    "Ireland",
    "Isle of Man",
    "Israel",
    "Italy",
    "Jamaica",
    "Japan",
    "Jersey",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Kiribati",
    "Kosovo",
    "Kuwait",
    "Kyrgyzstan",
    "Laos",
    "Latvia",
    "Lebanon",
    "Lesotho",
    "Liberia",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Macau",
    "Macedonia [FYROM]",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Maldives",
    "Mali",
    "Malta",
    "Marshall Islands",
    "Martinique",
    "Mauritania",
    "Mauritius",
    "Mayotte",
    "Mexico",
    "Micronesia",
    "Moldova",
    "Monaco",
    "Mongolia",
    "Montenegro",
    "Montserrat",
    "Morocco",
    "Mozambique",
    "Myanmar [Burma]",
    "Namibia",
    "Nauru",
    "Nepal",
    "Netherlands",
    "Netherlands Antilles",
    "New Caledonia",
    "New Zealand",
    "Nicaragua",
    "Niger",
    "Nigeria",
    "Niue",
    "Norfolk Island",
    "North Korea",
    "Northern Mariana Islands",
    "Norway",
    "Oman",
    "Pakistan",
    "Palau",
    "Palestinian Territories",
    "Panama",
    "Papua New Guinea",
    "Paraguay",
    "Peru",
    "Philippines",
    "Pitcairn Islands",
    "Poland",
    "Portugal",
    "Puerto Rico",
    "Qatar",
    "Romania",
    "Russia",
    "Rwanda",
    "Réunion",
    "Saint Helena",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Pierre and Miquelon",
    "Saint Vincent and the Grenadines",
    "Samoa",
    "San Marino",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Seychelles",
    "Sierra Leone",
    "Singapore",
    "Slovakia",
    "Slovenia",
    "Solomon Islands",
    "Somalia",
    "South Africa",
    "South Georgia and the South Sandwich Islands",
    "South Korea",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Svalbard and Jan Mayen",
    "Swaziland",
    "Sweden",
    "Switzerland",
    "Syria",
    "São Tomé and Príncipe",
    "Taiwan",
    "Tajikistan",
    "Tanzania",
    "Thailand",
    "Timor-Leste",
    "Togo",
    "Tokelau",
    "Tonga",
    "Trinidad and Tobago",
    "Tunisia",
    "Turkey",
    "Turkmenistan",
    "Turks and Caicos Islands",
    "Tuvalu",
    "U.S. Minor Outlying Islands",
    "U.S. Virgin Islands",
    "Uganda",
    "Ukraine",
    "United Kingdom",
    "United States",
    "Uruguay",
    "Uzbekistan",
    "Vanuatu",
    "Vatican City",
    "Venezuela",
    "Vietnam",
    "Wallis and Futuna",
    "Western Sahara",
    "Yemen",
    "Zambia",
    "Zimbabwe"
];
?>
    <section class="registration-section py-80 bg-image-center"
        style="background-image: url({{ URL::to('/') }}/assets/images/bg-2.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-9 col-xxl-8">
                    <div class="registration-form">
                      @if (session('success'))
                           <div class="alert alert-success text-center">
                            <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 48px;"></i>
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <h1>Thank you for registering</h1>
                            <p>Your details has been submitted successfully</p>
                            
                                {{--  {{ session('success') }}  --}}
                            </div>
                            <a href="{{ route('register') }}" class="register-btn">
                                <span>Back</span>
                            </a>
                        @else
                        <h4>Register your interest</h4>
                      
                        <form action="{{ route('contact.submit') }}" method="POST" id="register">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">First Name <span>*</span></label>
                                    <input name="FirstName" id="FirstName"  type="text" class="form-control" value="{{old('FirstName')}}">
                                    @error('FirstName')
                                        <span class="text-danger" id="FirstNameval" style="font-size: 14px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name <span>*</span></label>
                                    <input name="LastName" type="text" class="form-control" value="{{old('LastName')}}" id="LastName">
                                    @error('LastName')
                                        <span class="text-danger" style="font-size: 14px;"  id="LastNameval">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Phone Number <span>*</span></label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="MobileNumber1__c" id="mobile" class="form-control" value="{{old('MobileNumber1__c')}}">
                                        </div>
                                        @error('MobileNumber1__c')
                                            <span class="text-danger" id="phoneNumberval" style="font-size: 14px;">{{ $message }}</span>
                                        @enderror
                                        <div id="responseContainer" >
                                        <!-- Response will be displayed here -->
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="MobileCountryCode__c" id="hidden-country-code" value="{{old('MobileCountryCode__c')}}">
                                <input type="hidden" name="phone_number" id="hidden-phone-number" value="{{old('phone_number')}}">
                                <div class="col-md-6">
                                    <label class="form-label">Email Address <span>*</span></label>
                                    <input name="Email" type="text" class="form-control" id="email" value="{{old('Email')}}">
                                    @error('Email')
                                        <span class="text-danger" id="Emailval" style="font-size: 14px;">{{ $message }}</span>
                                    @enderror
                                     <div id="responseContaineremail">
                                        <!-- Response will be displayed here -->
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Country of Residence <span>*</span></label>
                                    <select class="form-select" name="LeadOrigin__c" id="LeadOrigin__c" onchange="getval(this);">
                                        <option selected value="">Select</option>
                                        <?php   foreach ($countries as $country) { ?>
                                        <option @if(old('LeadOrigin__c') == $country ) selected @endif value="<?=$country ?>"><?= $country ?></option>
                                       <?php } ?>
                                    </select>
                                    @error('LeadOrigin__c')
                                        <span class="text-danger" id="LeadOriginval" style="font-size: 14px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Nationality <span>*</span></label>
                                    <select class="form-select" name="Nationality__c" id="Nationality__c" onchange="nationality(this);">
                                        <option selected value="">Select</option>
                                        <?php   foreach ($nationalitys as $nationality) { ?>
                                        <option @if(old('Nationality__c') == $nationality ) selected @endif value="<?=$nationality ?>"><?= $nationality ?></option>
                                       <?php } ?>
                                    </select>
                                    @error('Nationality__c')
                                        <span class="text-danger" id="Nationalityval" style="font-size: 14px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 d-none" id="city_div">
                                    <label class="form-label">City <span>*</span></label>
                                    <select class="form-select" name="CustomerIPLocation__c">
                                        <option value="" selected>Select</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Dubai">Dubai</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="Ras al-Khaimah">Ras al-Khaimah</option>
                                        <option value="Sharjah">Sharjah</option>
                                        <option value="Umm al-Quwain">Umm al-Quwain</option>
                                        <option value="Al Ain">Al Ain</option>
                                    </select>
                                    @error('CustomerIPLocation__c')
                                        <span class="text-danger" style="font-size: 14px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                             {!! NoCaptcha::renderJs() !!}
                             {!! NoCaptcha::display() !!}
                             <?php /* 
                             {!! NoCaptcha::renderJs('fr', true, 'recaptchaCallback') !!}
                             {!! NoCaptcha::display(['data-theme' => 'dark']) !!} */ ?>
                    @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
                @endif
                
                            <div class="text-center mt-4">
                                
                                <button type="submit" id="submit_btn" class="theme-btn submit_btn"><i class="fa fa-spinner fa-pulse fa-3x fa-fw d-none" id="spinnerloader" style="font-size: 18px;"></i> Submit</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/assets/js/script.js"></script>
    <script>
        function getval(sel) {

            var value1 = sel.value;
             $('#LeadOriginval').html('');

            if (value1 == "United Arab Emirates") {
                $("#city_div").removeClass("d-none");
            } else {
                $("#city_div").addClass("d-none");
            }
        }

        $('#mobile').focusout(function() {
        var mobile = this.value;
        //var code = document.getElementById('hidden-country-code').value;
        var countryCode = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#mobile').val();
        if(phoneNumber.length > 0 ){
                    $('#phoneNumberval').html('');
                }
        var url = "{{ url('/') }}/phone-validation";
         $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        phoneNumber: phoneNumber,
                         countryCode: countryCode
                    },
                     success: function(res) {
                    console.log(res.Items[0].IsValid); // Log the response to console for debugging
                    if(res.Items[0].IsValid == "No"){
                        $('.submit_btn').prop("disabled", true);
                        $('#responseContainer').html('<span class="text-danger" style="font-size: 14px;">Enter the valid phone number</span>');
                    }else{
                        $('.submit_btn').prop("disabled", false);
                        $('#responseContainer').html('');
                    }
                    // Display the response data in the page
                    
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle error conditions here
                    $('#responseContainer').html('<p>Error fetching data from API</p>');
                }
                });
        });


        $('#email').focusout(function() {
            var Email = document.getElementById('email').value;
                if(Email.length > 0 ){
                    $('#Emailval').html('');
                }
        var email = this.value;
        var url = "{{ url('/') }}/email-validation";
         $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        email: email,
                    },
                     success: function(res) {
                    console.log(res.Items[0].IsValid); // Log the response to console for debugging
                    if(res.Items[0].ResponseCode == "Invalid" || res.Items[0].Error == "1001"){
                        if(email.length >= 3){
                            $('.submit_btn').prop("disabled", true);
                            $('#responseContaineremail').html('<span class="text-danger" style="font-size: 14px;">Enter the valid email id</span>');
                        }
                    }else{
                        $('.submit_btn').prop("disabled", false);
                        $('#responseContaineremail').html('');
                    }
                    // Display the response data in the page
                    
                },
               /* error: function(xhr, status, error) {
                    console.error('Error:', error);
                    // Handle error conditions here
                    $('#responseContaineremail').html('<p>Error fetching data from API</p>');
                } */
                   
                });
                
        });


        $('#FirstName').focusout(function() {
            var FirstName = document.getElementById('FirstName').value;
           if(FirstName.length >0 ){
                $('#FirstNameval').html('');
            }
            });
        $('#LastName').focusout(function() {
            var LastName = document.getElementById('LastName').value;
           if(LastName.length >0 ){
                $('#LastNameval').html('');
            }
            });

            function nationality(sel) {
             $('#Nationalityval').html('');
        }
           
            
    </script>
</body>

</html>
