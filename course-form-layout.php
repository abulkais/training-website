<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/callie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 06:01:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
  <link rel="canonical" href="https://kvch.in/course-form-layout" />
  <link rel="alternate" href="https://kvch.in/course-form-layout" hreflang="en-in" />
  <style>
    #select_location_for_course_form {
      padding: 9px 9px;
      font-size: 16px;
      margin-bottom: 10px;
      box-shadow: none;
      border: 1px solid #dcdcdc;
    }

    .remove-hover:hover {
      cursor: default !important;
    }

    .custom_btn_effect .btn-primary:after {
      background-color: #469a93;
    }
  </style>

  <div class="block_content" style="box-shadow: 2px 2px 2px 2px;padding: 15px;border-radius:8px;">
    <a href="javascript:void(0);" style="text-align:center;color:#000;display:block;margin:0 auto;font-size:40px;">I'm Interested</a>
    <form method="post" action="mail" id="submitform" onsubmit="return submitUserForm();">
     <input type="text" class="hidden" name="im_interested">
     <input type="text" class="hidden" name="im_interested2">
     <input type="text" class="hidden" name="im_interested3">
      <div class="form-group">
      <input type="text" name="name" placeholder="name" class="form-control" required style="border-radius: 15px;" pattern="[A-Z\sa-z]{3,20}">
      </div>

      <div class="form-group">
      <input type="text" name="email" placeholder="email" class="form-control" required style="border-radius: 15px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
      </div>
      
      <div class="form-group">
      <input type="tel" name="number" placeholder="number" class="form-control" required style="border-radius: 15px;" pattern="^[1-9]\d*$" minlength="10" maxlength="16">
      </div>

      <div class="form-group">
      <input type="text" name="course_name" placeholder="Course Name" class="form-control" required style="border-radius: 15px;">
      </div>

      <div class="form-group">
      <select  name="location" class="form-control" required style="border-radius: 15px;">
      <option value=""> Select location </option>
          <option value="Online Mode" style="font-weight:900;"> Online Mode </option>
          <option value="Noida">  Noida </option>
          <option value="Delhi">  Delhi </option>
          <option value="Bhopal"> Bhopal </option>
          <option value="Mohali"> Mohali </option>
          <option value="Chennai"> Chennai </option>
          <option value="USA">  USA </option>
          <option value="UAE"> UAE </option>
          <option value="Nigeria">Nigeria</option>
    </select>
      </div>

      <div class="form-group">
      <!-- <input type="text" "> -->
      <textarea name="query" placeholder="Message" rows="2" class="form-control" required style="border-radius: 15px;"></textarea>
      </div>
      <center>
        <div class="form-con" title="recqaptca">
          <div class="g-recaptcha" data-sitekey="6Ldii1siAAAAACObLfaWSS0DVCYZdeXI4YdkdBKw" data-callback="verifyCaptcha">
          </div>
        </div>
      </center>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <input id="buttonhide" type="submit" name="course_page" class="btn btn-block" style="background-color:#174c9dcf; color:#fff; padding:15px; margin-top:10px; font-weight:bold;" >
      <div   id="buttonshow"  style="display:none; text-align:center; cursor:none; background-color:#174c9dcf; color:#fff; padding:15px; margin-top:10px;" disabled>Please wait</div>
    </form>
   
    <script>
    $('#submitform').submit(function() {
        $('#buttonhide').hide();
        $('#buttonshow').show();
    });
</script>
  </div>

  <script>
    var recaptcha_response = '';

    function submitUserForm() {
      if (recaptcha_response.length == 0) {
        alert("Captha is mandatory");
            location.reload();
        return false;
      }
      return true;
    }

    function verifyCaptcha(token) {
      recaptcha_response = token;
      document.getElementById('g-recaptcha-error').innerHTML = '';
    }
  </script>
  
  <style>
    #overlay {
      position: fixed;
      top: 0;
      z-index: 100;
      width: 100%;
      height: 100%;
      display: none;
      background: rgba(0, 0, 0, 0.6);
    }

    .cv-spinner {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .spinner {
      width: 40px;
      height: 40px;
      border: 4px #ddd solid;
      border-top: 4px #2e93e6 solid;
      border-radius: 50%;
      animation: sp-anime 0.8s infinite linear;
    }

    @keyframes sp-anime {
      100% {
        transform: rotate(360deg);
      }
    }

    .is-hide {
      display: none;
    }
  </style>
  <script type="text/javascript">
    // Captcha Script
    var course_form_course_name = document.title;
    $('#course_title').val(course_form_course_name);

    function checkform(theform) {
      var why = "";
      var course_form_full_name = $("#course_form_full_name").val();
      var course_form_contact_no = $("#course_form_contact_no").val();
      var course_form_email = $("#course_form_email").val();
      var select_location_for_course_form = $("#select_location_for_course_form").val();
      var course_form_query = $("#course_form_query").val();

      if (course_form_full_name == "" || course_form_contact_no == "" || course_form_email == "" || select_location_for_course_form == "" || course_form_query == "") {
        alert("Fill all the form input");
        return false;
      }

      $("#overlay").fadeIn(300);
      debugger
      // var CaptchaInput = $("#CaptchaInput").val();
      // if (CaptchaInput == "") {
      //     why += "- Please Enter CAPTCHA Code.\n";
      // }
      // if (CaptchaInput != "") {
      //     if (ValidCaptcha(CaptchaInput) == false) {
      //         why += "- The CAPTCHA Code Does Not Match.\n";
      //     }
      // }

      if (why != "") {
        setTimeout(function() {
          $("#overlay").fadeOut(300);
        }, 500);
        alert(why);
        return false;
      }
      $('form#submit_query_form_for_courses').submit();

    }

    var a = Math.ceil(Math.random() * 9) + '';
    var b = Math.ceil(Math.random() * 9) + '';
    var c = Math.ceil(Math.random() * 9) + '';
    var d = Math.ceil(Math.random() * 9) + '';
    var e = Math.ceil(Math.random() * 9) + '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

    //Validate input against the generated number
    function ValidCaptcha() {
      var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
      var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
      if (str1 == str2) {
        return true;
      } else {
        return false;
      }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string) {
      return string.split(' ').join('');
    }
  </script>
  <script>
    function validateForm1(this) {
      var isFormValid = true;
      isFormValid &= validateForm();
      isFormValid &= checkform(this);

      return isFormValid ? true : false;
    }
  </script>