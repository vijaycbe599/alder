$('.slider-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    navText: ['<span class="fa-solid fa-arrow-left-long"></span>', '<span class="fa-solid fa-arrow-right-long"></span>'],
    mouseDrag: true,
    autoplay: true,
    smartSpeed: 2500,
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


$('.intro-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    navText: ['<span class="fa-solid fa-arrow-left-long"></span>', '<span class="fa-solid fa-arrow-right-long"></span>'],
    mouseDrag: true,
    autoplay: true,
    smartSpeed: 2500,
    animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.image-slider').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    navText: ['<span class="fa-solid fa-arrow-left-long"></span>', '<span class="fa-solid fa-arrow-right-long"></span>'],
    mouseDrag: true,
    autoplay: true,
    smartSpeed: 2500,
    animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.footer-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    navText: ['<span class="fa-solid fa-arrow-left-long"></span>', '<span class="fa-solid fa-arrow-right-long"></span>'],
    mouseDrag: true,
    autoplay: true,
    smartSpeed: 2500,
    animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// $(function() {
//     var code = "+97150 123 4567"; // Assigning value from model.
//     $('#mobile').val(code);
//     $('#mobile').intlTelInput({
//         autoHideDialCode: true,
//         autoPlaceholder: "ON",
//         dropdownContainer: document.body,
//         formatOnDisplay: true,
//         // hiddenInput: "full_number",
//         initialCountry: "us",
//         //  nationalMode: true,
//         placeholderNumberType: "MOBILE",
//         preferredCountries: ['us', 'gb', 'in'],
//         separateDialCode: true
//     });
//     $('#btn-submit').on('click', function() {
//         var code = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
//         var phoneNumber = $('#mobile').val();
//         document.getElementById("code").innerHTML = code;
//         document.getElementById("mobile-number").innerHTML = phoneNumber;
//     });
// });
$(function() {
    var code = "+971"; // Assigning value from model.
    $('#mobile').val(code);
    $('#mobile').intlTelInput({
      autoHideDialCode: true,
      autoPlaceholder: "ON",
      dropdownContainer: document.body,
      formatOnDisplay: true,
      initialCountry: "us",
      placeholderNumberType: "MOBILE",
      preferredCountries: ['us', 'gb', 'in'],
      separateDialCode: true
    });

    $('#register').on('submit', function(event) {

        var FirstName = document.getElementById('FirstName').value;
        var LastName = document.getElementById('LastName').value;
        var Email = document.getElementById('email').value;
        var LeadOrigin = document.getElementById('LeadOrigin__c').value;
        var Nationality = document.getElementById('Nationality__c').value;

        

      var countryCode = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
      var phoneNumber = $('#mobile').val();

      if(FirstName !='' && LastName !='' && Email !='' && phoneNumber !=''  && LeadOrigin !='' && Nationality !=''){
        $("#spinnerloader").removeClass("d-none");
        //$("#submit_btn").addClass("d-none");
        $('#submit_btn"]').attr('disabled','disabled');
    }else{
        $("#spinnerloader").addClass("d-none");
        //$("#submit_btn").removeClass("d-none");
        $('#submit_btn').removeAttr('disabled');
        //return false;
    }

      // Set values in hidden inputs
      $('#hidden-country-code').val(countryCode);
      $('#hidden-phone-number').val(phoneNumber);

      // Display values for debugging purposes
      document.getElementById("code").innerHTML = countryCode;
      document.getElementById("mobile-number").innerHTML = phoneNumber;
    });
  });