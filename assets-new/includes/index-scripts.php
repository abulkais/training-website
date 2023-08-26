<!-- <script src="assets-new/js/jquery.min.js" type="text/javascript"></script> -->
<script src="assets-new/js/popper.min.js" type="text/javascript"></script>
<script src="assets-new/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets-new/js/slick.min.js" type="text/javascript"></script>
<script src="assets-new/js/intlTelInput.min.js" type="text/javascript"></script>
<script src="assets-new/js/custom.min.js" type="text/javascript"></script>
<script src="assets-new/js/global.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.13/js/intlTelInput-jquery.min.js"></script>

<script>
    // -----Country Code with flag script
    var code = "+91";
    $(".country_flag").intlTelInput({
        initialCountry: "in",
        separateDialCode: true,

    });
</script>

<!-- search related js css cdn -->
<link href="assets-new/css/search.css" rel="stylesheet" type="text/css">
<link href="assets-new/css/another-search.css" rel="stylesheet" type="text/css">
<script src="assets-new/js/search.js" type="text/javascript"></script>
<!-- search related cdn end -->


<!-- captcha script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- button disaled and wait script -->
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


<!-- only input number -->
<script>
    function number_e(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>



<!-- ---Clarity----- -->
<script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "98kd5ku90t");
</script>



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

<!-- capthca -->
<script>
    var recaptcha_response = '';
    // Quick Enquiry
    function formvalidateb() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }

    // Inspiring upcoming
    function formvalidateb2() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb2").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }
    
    //Talk to our Training Advisor
    function formvalidateb3() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb3").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }


    //On-Premise
    function formvalidateb4() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb4").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }


    //Instructor-Led Live
    function formvalidateb5() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb5").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }

    //Self-Paced Online
    function formvalidateb6() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb6").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }

    //Blended Training
    function formvalidateb7() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb7").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }

    //Request a callback
    function formvalidateb8() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb8").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }

    //
    function formvalidateb9() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatoryb9").innerHTML = "captcha is mandatory";
            return false;
        } else {
            $('.formbuttonhide2').hide();
            $('.formbuttonshow2').show();
            return true;
        }
    }
    
    

    function verifyCaptcha(token) {
        recaptcha_response = token;
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
</script>