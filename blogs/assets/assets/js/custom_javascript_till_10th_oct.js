window.onload = generateCaptcha;
var captcha;
function generateCaptcha() {
    
    var a = Math.floor((Math.random() * 10));
    var b = Math.floor((Math.random() * 10));
    var c = Math.floor((Math.random() * 10));
    var d = Math.floor((Math.random() * 10));
    captcha=a.toString()+b.toString()+c.toString()+d.toString();
    //alert(captcha);
    document.getElementById('captcha_book_now').value=captcha;

}
$(".layout-theme").attr("data-header", "");

/*
var xx = document.getElementsByClassName("wrap-title-page")[0].textContent;
console.log(xx.replace(/\n+/g, ""));*/

function isNumberKey(evt) {
  
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 47 || charCode > 57))
        return false;

    return true;
}

    $(function(){
      var myurl=document.URL;
document.cookie="mypageurl1= "+myurl;
      $("#loadheader").load("includes/header.html");
     $("#fetchCourseForms").load("course-form-layout.html");
      $("#includedContent").load("includes/content.html"); 
      $("#loadfooter").load("includes/footer.html"); 

    });

$(document).ready(function()
{
$('head').after('<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDF2W3G"height="0" width="0"style="display:none;visibility:hidden"></iframe></noscript>');

$('head').after('<script type="text/javascript">window.smartlook||(function(d) {var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName("head")[0];var c=d.createElement("script");o.api=new Array();c.async=true;c.type="text/javascript";c.charset="utf-8";c.src="https://rec.smartlook.com/recorder.js";h.appendChild(c);})(document);smartlook("init", "c4bd2f9015a56c584fcfa6a40d142c7758990189");</script>');

$('body').after("<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-TDF2W3G');</script>");

});

/*function submitQuery()
{
  var a = document.getElementById('full_name').value;
  var b = document.getElementById('contact_no').value; 


    */


function sendContactForm()
{
var contact_us_fullname = document.getElementById('contact_us_fullname').value;
var contact_us_subject = document.getElementById('contact_us_subject').value;
var contact_us_message = document.getElementById('contact_us_message').value;
var contact_form_query_title = "Enquiry from Contact Us Page";
var CaptchaInput = document.getElementById('CaptchaInput').value;
var txtCaptcha = document.getElementById('txtCaptcha').value;
if(txtCaptcha != CaptchaInput) { document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Please validate the form.</p>";   return false;event.preventDefault();   }


if ( CaptchaInput == '' || contact_us_fullname == "" || contact_us_subject == "" || contact_us_message == "" )
 {

 
 document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Please validate the form.</p>";
 return false;event.preventDefault(); 

}
else {



var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { 
console.log(this.responseText);
               var str_rsponse = this.responseText;
               var new_string = str_rsponse.trim();
               alert(new_sting)
  if(    new_string == 1 ){
                 document.getElementById('response_msg').innerHTML = "<p style='color:green;font-size:11px; padding-left:10px;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";


              }
              else if( new_string  == 0 ){
                 document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Your message couldn't be sent.</p>";




              }
                 
            }else  {  }
        };
        xmlhttp.open('POST', 'backend/sendcontactdetails.php?a='+contact_us_fullname+'&b='+contact_us_subject+'&c='+contact_us_message+'&d='+contact_form_query_title, true);
        xmlhttp.send();






}








}


function submitQueryFormCourses()
{

var course_form_full_name= document.getElementById('course_form_full_name').value;
var course_form_contact_no= document.getElementById('course_form_contact_no').value;
var course_form_email= document.getElementById('course_form_email').value;
var course_form_query= document.getElementById('course_form_query').value;
var course_form_query_title = "Enquiry details from Course Page";
var course_form_course_name = document.title;
var select_location_for_course_form_selector = document.getElementById('select_location_for_course_form');
var select_location_for_course_form = select_location_for_course_form_selector[select_location_for_course_form_selector.selectedIndex].text;


var CaptchaInput = document.getElementById('CaptchaInput').value;
var txtCaptcha = document.getElementById('txtCaptcha').value;
if(txtCaptcha != CaptchaInput) { document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Please validate the form.</p>";   return false;event.preventDefault();   }


if ( CaptchaInput == "" ||  course_form_full_name == "" || course_form_contact_no == "" || course_form_email == "" || course_form_query == "" ){ 
 document.getElementById('show_course_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Please validate the form.</p>";
 return false;event.preventDefault(); 

}
else {   

var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { 
console.log(this.responseText);
               var str_rsponse = this.responseText;
               var new_string = str_rsponse.trim();
  if(    new_string == 1 ){
                 document.getElementById('show_course_error').innerHTML = "<p style='color:green;font-size:11px; padding-left:10px;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";


              }
              else if( new_string  == 0 ){
                 document.getElementById('show_course_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Your message couldn't be sent.</p>";




              }
                 
            }else  {  }
        };
        xmlhttp.open('POST', 'backend/sendcoursedetails.php?a='+course_form_full_name+'&b='+course_form_contact_no+'&c='+course_form_email+'&d='+course_form_query+'&e='+course_form_query_title+'&f='+course_form_course_name+'&g='+select_location_for_course_form, true);
        xmlhttp.send();


}
}
$('#submit_query_form_header_mobile_footer').submit(function(event) {



     
var full_name_header = document.getElementById('full_name_header').value;
var contact_no_header = document.getElementById('contact_no_header').value;

var location_book_now_form = document.getElementById('location_book_now_form').value;

var location_book_now_form_selector = document.getElementById('location_book_now_form');
var location_book_now_form = location_book_now_form_selector[location_book_now_form_selector.selectedIndex].text;

var email_form_book_now = document.getElementById('email_form_book_now').value;
var message_form_book_now = document.getElementById('message_form_book_now').value;
var hidden_book_now_form_title = "Enquiry Details From Mobile Query";


if(full_name_header == '' )
{
document.getElementById('show_captcha_error').innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Please enter the required fields. </p>";
        event.preventDefault();
}

var inputcaptcha_book_now = document.getElementById("inputText_book_now").value;


if(inputcaptcha_book_now !=captcha){
generateCaptcha();
document.getElementById('show_captcha_error').innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Captcha doesn't match, please try again!! </p>";

        event.preventDefault();
    }
    else{
        
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { 
console.log(this.responseText);
               var str_rsponse = this.responseText;
               var new_string = str_rsponse.trim();
  if(    new_string == 1 ){
                 document.getElementById('show_captcha_error').innerHTML = "<p style='color:green;font-size:12px; padding-left:10px;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";
var form_reset = document.getElementById('submit_query_form_header_mobile_footer');
form_reset.reset();


              }
              else if( new_string  == 0 ){ 
                 document.getElementById('show_captcha_error').innerHTML = "<p style='color:red;font-size:12px;padding-left:10px;'> Your message couldn't be sent.</p>";




              }
                 
            }else  {  }
        };
        xmlhttp.open('POST', 'backend/sendbooknowmailfromevents.php?a='+full_name_header+'&b='+contact_no_header+'&c='+location_book_now_form+'&d='+email_form_book_now+'&e='+message_form_book_now+'&f='+hidden_book_now_form_title, true);
        xmlhttp.send();
    }





        });

$('#submit_query_form_events_page').submit(function(event) {
    
var full_name_header = document.getElementById('full_name_header').value;
var contact_no_header = document.getElementById('contact_no_header').value;

var location_book_now_form = document.getElementById('location_book_now_form').value;

var location_book_now_form_selector = document.getElementById('location_book_now_form');
//var location_book_now_form = location_book_now_form_selector[location_book_now_form_selector.selectedIndex].text;

var email_form_book_now = document.getElementById('email_form_book_now').value;
var message_form_book_now = document.getElementById('message_form_book_now').value;
var technology=document.getElementById('technology').value;
var college_name=document.getElementById('collage_name').value;

var hidden_book_now_form_title = "Enquiry From Events Page";



if(full_name_header == '' )
{
document.getElementById('show_captcha_error').innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Please enter the required fields. </p>";
        event.preventDefault();
}
if(college_name == '' )
{
document.getElementById('show_captcha_error').innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Please enter the required fields. </p>";
        event.preventDefault();
}


var inputcaptcha_book_now = document.getElementById("inputText_book_now").value;
if(inputcaptcha_book_now !=captcha){
generateCaptcha();
document.getElementById('show_captcha_error').innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Captcha doesn't match, please try again!! </p>";
        event.preventDefault();
    }
    else{
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { 
console.log(this.responseText);
               var str_rsponse = this.responseText;
               var new_string = str_rsponse.trim();
  if(    new_string == 1 ){
                 document.getElementById('show_captcha_error').innerHTML = "<p style='color:green;font-size:12px; padding-left:10px;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";
var form_reset = document.getElementById('submit_query_form_events_page');
form_reset.reset();


              }
              else if( new_string  == 0 ){ 
                 document.getElementById('show_captcha_error').innerHTML = "<p style='color:red;font-size:12px;padding-left:10px;'> Your message couldn't be sent.</p>";




              }
                 
            }else  {  }
        };
        xmlhttp.open('POST', 'backend/sendbooknowmailfromevents.php?a='+full_name_header+'&b='+contact_no_header+'&c='+location_book_now_form+'&d='+email_form_book_now+'&e='+message_form_book_now+'&f='+hidden_book_now_form_title+'&g='+college_name+'&h='+technology, true);
        xmlhttp.send();
    }





        });






function sendReferralForm()
{
var refer_name = document.getElementById('refer_name').value;
var refer_phone_number = document.getElementById('refer_phone_number').value;
var refer_optradio = $("input[name='refer_optradio']:checked").val(); 
var refer_friend_name = document.getElementById('refer_friend_name').value;
var refer_friend_phone = document.getElementById('refer_friend_phone').value;
var refer_friend_email = document.getElementById('refer_friend_email').value;
var refer_friend_college = document.getElementById('refer_friend_college').value;
var title_refer_earn = " Query from refer and earn form";


    var atpos = refer_friend_email.indexOf("@");
    var dotpos = refer_friend_email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=refer_friend_email.length) {
        
        return false; event.preventDefault();
    }

var CaptchaInput = document.getElementById('CaptchaInput').value;
var txtCaptcha = document.getElementById('txtCaptcha').value;
if(txtCaptcha != CaptchaInput) { document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:10px;'> Please validate the form.</p>";   return false;event.preventDefault();   }


if (CaptchaInput == "" || refer_name == "" || refer_phone_number == "" || refer_optradio == "" || refer_friend_name == "" || refer_friend_phone == "" || refer_friend_email == "" || refer_friend_college == "" ){ 
 document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:7%;'> Please validate the recaptcha.</p>";
 return false;event.preventDefault(); 

}
else {



var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) { 
console.log(this.responseText);
               var str_rsponse = this.responseText;
               var new_string = str_rsponse.trim();
  if(    new_string == 1 ){
$('.works_form').css({"background":"rgba(255, 255, 255, 0.64)","border":"2px solid #c54727"});



                 document.getElementById('change_thank_h2').innerHTML ="Thank you for your referral !!";
document.getElementById('refer_earn_form_id').style.display ="none";
$('#referal_icon_text').html("<img src='assets/img/thanks.png' style='display: block;padding-top: 45px;    padding-bottom: 55px; margin: 0 auto;'> <p style='     padding-top: 5px;    padding-bottom: 55px;   font-weight: bold;  text-align: center; line-height: 27px; font-size: 18px; color: #333;'>We will notify once your friends <br>gets enrolled in any of our programme.</p>");
                 
                 document.getElementById('show_contact_error').innerHTML = "<p style='color:green;font-size:13px; padding-left:7%;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";


var form_reset = document.getElementById('refer_earn_form_id');
form_reset.reset();

setTimeout(function(){ 

document.getElementById('show_contact_error').innerHTML = "";


 }, 2000);



              }
              else if( new_string  == 0 ){
                 document.getElementById('show_contact_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:7%;'> Your message couldn't be sent.</p>";




              }
                 
            }else  {  }
        };
        xmlhttp.open('POST', 'backend/sendreferform.php?a='+refer_name+'&b='+refer_phone_number+'&c='+refer_optradio+'&d='+refer_friend_name+'&e='+refer_friend_phone+'&f='+refer_friend_email+'&g='+refer_friend_college+'&h='+title_refer_earn, true);
        xmlhttp.send();

}

}
$( document ).ready(function() {
   generateCaptcha();
});