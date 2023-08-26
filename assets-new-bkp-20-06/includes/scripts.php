<script src="assets-new/js/jquery.min.js" type="text/javascript"></script>
<script src="assets-new/js/popper.min.js" type="text/javascript"></script>
<script src="assets-new/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets-new/js/slick.min.js" type="text/javascript"></script>
<script src="assets-new/js/intlTelInput.min.js" type="text/javascript"></script>
<script src="assets-new/js/custom.min.js" type="text/javascript"></script>
<script src="assets-new/js/global.min.js" type="text/javascript"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" /> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script> -->
<link rel="stylesheet" href="assets-new/css/intltelInput-country-no.css">
<script src="assets-new/js/intlelInput-jquery.min-country-no.js"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- search related js css cdn -->
<link href="assets-new/css/search.css" rel="stylesheet" type="text/css">
<link href="assets-new/css/another-search.css" rel="stylesheet" type="text/css">
<script src="assets-new/js/search.js" type="text/javascript"></script>
<!-- search related cdn end -->


<script>
    $('#submitformdownc').submit(function() {
        $('#buttonhidedownc').hide();
        event.preventDefault();

        // 👇️ Send data to the server here

        // 👇️ Reset the form here
        form.reset();
        $('#buttonshowdownc').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

    });
</script>

<!--  -->

<script>
    setTimeout(function() {
        $('#coursepage').modal('show');
    }, 5000);
</script>

<script>
    $('#submitform').submit(function() {
        $('#buttonhide').hide();
        $('#buttonshow').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });


    });
</script>
<script>
    $('#submitformneedc').submit(function() {
        $('#buttonhideneedc').hide();
        $('#buttonshowneedc').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

    });
</script>

<script>
    $('#submitformenq').submit(function() {
        $('#buttonhideenq').hide();
        $('#buttonshowenq').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitforminspiring').submit(function() {
        $('#buttonhideinspiring').hide();
        $('#buttonshowinspiring').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformcantf').submit(function() {
        $('#buttonhidecantf').hide();
        $('#buttonshowcantf').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformenqnow').submit(function() {
        $('#buttonhideenqnow').hide();
        $('#buttonshowenqnow').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformapply').submit(function() {
        $('#buttonhideapply').hide();
        $('#buttonshowapply').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformdownloadb').submit(function() {
        $('#buttonhidedownloadb').hide();
        $('#buttonshowdownloadb').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>

<script>
    $('#submitformcertfic').submit(function() {
        $('#buttonhidecertfic').hide();
        $('#buttonshowcertfic').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformreff').submit(function() {
        $('#buttonhidereff').hide();
        $('#buttonshowreff').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformdownc').submit(function() {
        $('#buttonhidedownc').hide();
        $('#buttonshowdownc').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>

<script>
    $('#submitformdownc1').submit(function() {
        $('#buttonhidedownc1').hide();
        $('#buttonshowdownc1').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
<script>
    $('#submitformrequestfooter').submit(function() {
        $('#buttonhiderequestfooter').hide();
        $('#buttonshowrequestfooter').show();
        // hit multiple enter button  prevent
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>

<script>
    $('.form-disable').on('submit', function() {
        var self = $(this),
            button = self.find('input[type="submit"],button');

        submitValue = button.data('submit-value');

        button.attr('enable', 'enable').val(submitValue) ? submitValue : 'please wait...';
        // return false;

    });
</script>



<!-- accordian overview -->
<script>
    var acc = document.getElementsByClassName("overview-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var overview_panel = this.nextElementSibling;
            if (overview_panel.style.maxHeight) {
                overview_panel.style.maxHeight = null;
            } else {
                overview_panel.style.maxHeight = overview_panel.scrollHeight + "px";
            }
        });
    }
</script>

<!-- accordian carriculum -->
<script>
    var acc = document.getElementsByClassName("carriculum-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var carriculum_panel = this.nextElementSibling;
            if (carriculum_panel.style.maxHeight) {
                carriculum_panel.style.maxHeight = null;
            } else {
                carriculum_panel.style.maxHeight = carriculum_panel.scrollHeight + "px";
            }
        });
    }
</script>





<!-- page load form -->
<!-- only input number -->
<script>
    function number_e(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>



<script type="text/javascript">
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#txtPhone').val(code);
        $('#txtPhone').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#hom-page-form').val(code);
        $('#hom-page-form').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#txtPhone1').val(code);
        $('#txtPhone1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#txtPhone2').val(code);
        $('#txtPhone2').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#txtPhone3').val(code);
        $('#txtPhone3').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#contactform').val(code);
        $('#contactform').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });


    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#best-course').val(code);
        $('#best-course').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#working-professional').val(code);
        $('#working-professional').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#fly-me-trainer').val(code);
        $('#fly-me-trainer').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });
    });
</script>

<!-- recptcha script mandatry -->

<script>
    var recaptcha_response = '';

    function submitUserForm() {
        if (recaptcha_response.length == 0) {
            alert("Captcha is mandatory");
            return false;
        }
        // return true;
    }

    function verifyCaptcha(token) {
        recaptcha_response = token;
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }

    // course page

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training1').val(code);
        $('#training1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training2').val(code);
        $('#training2').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training3').val(code);
        $('#training3').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training4').val(code);
        $('#training4').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });


    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#request_bacth').val(code);
        $('#request_bacth').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#enquire_now').val(code);
        $('#enquire_now').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#get_dertificate').val(code);
        $('#get_dertificate').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#get_refer_earn').val(code);
        $('#get_refer_earn').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#applynow').val(code);
        $('#applynow').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#download_brochure_c').val(code);
        $('#download_brochure_c').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#request_call_b').val(code);
        $('#request_call_b').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#requestcallback').val(code);
        $('#requestcallback').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#applynowhomepag').val(code);
        $('#applynowhomepag').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });




    // organization scripts
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#organizationpage').val(code);
        $('#organizationpage').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });


    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_needs').val(code);
        $('#training_needs').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_needs1').val(code);
        $('#training_needs1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_needs2').val(code);
        $('#training_needs2').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_needs3').val(code);
        $('#training_needs3').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#requestcall_back1').val(code);
        $('#requestcall_back1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });
    // services paeg

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#servicespage').val(code);
        $('#servicespage').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    // aboutpage
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#aboutpage').val(code);
        $('#aboutpage').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });
    // industrial_internship
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#industrial_internshippage').val(code);
        $('#industrial_internshippage').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });
    // working-professionals
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#working_professionals_number').val(code);
        $('#working_professionals_number').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    // working-professionals
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#requestcall_working_professionals').val(code);
        $('#requestcall_working_professionals').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    // training-for-corporates

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_for_corporates').val(code);
        $('#training_for_corporates').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_for_corporates1').val(code);
        $('#training_for_corporates1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#training_for_corporates2').val(code);
        $('#training_for_corporates2').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    // in-house-training
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#in_house_training').val(code);
        $('#in_house_training').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#in_house_training1').val(code);
        $('#in_house_training1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    // fly_trainer
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#fly_trainer').val(code);
        $('#fly_trainer').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#fly_trainer1').val(code);
        $('#fly_trainer1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });
    // study-abroad
    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#study_abroad').val(code);
        $('#study_abroad').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });

    $(function() {
        var code = "+91"; // Assigning value from model.
        $('#study_abroad1').val(code);
        $('#study_abroad1').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['India'],
            separateDialCode: true
        });

    });
</script>

<!-- acordian js -->
<script>
    // accordian js
    var acc = document.getElementsByClassName("accordion1");
    var i;

    // Open the first accordion
    var firstAccordion = acc[0];
    var firstPanel = firstAccordion.nextElementSibling;
    firstAccordion.classList.add("active");
    firstPanel.style.maxHeight = firstPanel.scrollHeight + "px";

    // Add onclick listener to every accordion element
    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            // For toggling purposes detect if the clicked section is already "active"
            var isActive = this.classList.contains("active");

            // Close all accordions
            var allAccordions = document.getElementsByClassName("accordion1");
            for (j = 0; j < allAccordions.length; j++) {
                // Remove active class from section header
                allAccordions[j].classList.remove("active");

                // Remove the max-height class from the panel to close it
                var panel = allAccordions[j].nextElementSibling;
                var maxHeightValue = getStyle(panel, "maxHeight");

                if (maxHeightValue !== "0px") {
                    panel.style.maxHeight = null;
                }
            }

            // Toggle the clicked section using a ternary operator
            isActive ? this.classList.remove("active") : this.classList.add("active");

            // Toggle the panel element
            var panel = this.nextElementSibling;
            var maxHeightValue = getStyle(panel, "maxHeight");

            if (maxHeightValue !== "0px") {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        };
    }

    // Cross-browser way to get the computed height of a certain element. Credit to @CMS on StackOverflow (http://stackoverflow.com/a/2531934/7926565)
    function getStyle(el, styleProp) {
        var value, defaultView = (el.ownerDocument || document).defaultView;
        // W3C standard way:
        if (defaultView && defaultView.getComputedStyle) {
            // sanitize property name to css notation
            // (hypen separated words eg. font-Size)
            styleProp = styleProp.replace(/([A-Z])/g, "-$1").toLowerCase();
            return defaultView.getComputedStyle(el, null).getPropertyValue(styleProp);
        } else if (el.currentStyle) { // IE
            // sanitize property name to camelCase
            styleProp = styleProp.replace(/\-(\w)/g, function(str, letter) {
                return letter.toUpperCase();
            });
            value = el.currentStyle[styleProp];
            // convert other units to pixels on IE
            if (/^\d+(em|pt|%|ex)?$/i.test(value)) {
                return (function(value) {
                    var oldLeft = el.style.left,
                        oldRsLeft = el.runtimeStyle.left;
                    el.runtimeStyle.left = el.currentStyle.left;
                    el.style.left = value || 0;
                    value = el.style.pixelLeft + "px";
                    el.style.left = oldLeft;
                    el.runtimeStyle.left = oldRsLeft;
                    return value;
                })(value);
            }
            return value;
        }
    }
</script>

<!-- ---Clarity----- -->
<!-- <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "98kd5ku90t");
</script> -->



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100393938-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-100393938-1');
</script>


<!-- Meta Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '645728379664958');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=645728379664958&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->

<!-- Meta Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '919860262720959');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=919860262720959&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->