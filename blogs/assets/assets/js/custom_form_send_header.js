function generateCaptcha() {
    var e = Math.floor(10 * Math.random()),
        t = Math.floor(10 * Math.random()),
        o = Math.floor(10 * Math.random()),
        n = Math.floor(10 * Math.random());
    captcha = e.toString() + t.toString() + o.toString() + n.toString(), document.getElementById("captcha_book_now1").value = captcha, document.getElementById("captcha_book_now").value = captcha
}
/*
function sendCallBackForm() {
	alert('hello');
    var e = document.getElementById("call_back_name").value,
        t = document.getElementById("call_back_number").value,
        o = document.getElementById("call_back_time").value,
        n = "Call Back Enquiry";
    if ("" == e || "" == t || "" == o || t.length < 10) return !1;
    var a = new XMLHttpRequest;
    a.onreadystatechange = function() {
        if (4 == this.readyState && 200 == this.status) {
            console.log(this.responseText);
            var e = this.responseText,
                t = e.trim();
				1 == t ? document.getElementById("show_callback_error").innerHTML = "<p style='color:green;font-size:11px; padding-left:0px;'> Thanks for submission..!! A member of our team will contact you as per your preferable time.</p>", 
				document.getElementById('call_back_name').value="",
				document.getElementById('call_back_number').value="",
				document.getElementById('call_back_time').value="": 0 == t && (document.getElementById("show_callback_error").innerHTML = "<p style='color:red;font-size:11px;padding-left:0px;'> Your message couldn't be sent.</p>")
        }
    }, a.open("POST", "backend/sendcallbackform.php?a=" + e + "&b=" + t + "&c=" + o + "&d=" + n, !0), a.send()
}
*/

function sendCallBackForm()
{
var call_back_name= document.getElementById('call_back_name').value;
var call_back_number= document.getElementById('call_back_number').value;
var call_back_time= document.getElementById('call_back_time').value;


var call_back_form_title = "Call Back Enquiry";


if(call_back_name == '' || call_back_number == '' ||  call_back_time == '' || call_back_number.length <10 ){

//document.getElementById('show_callback_error').innerHTML = "<p style='color:red; padding-left:10px;   font-size: 11px;font-family: lato;'> Please fill required fields!! </p>";
        return false;
    }
    else{
    $("#send_get").text('Please wait');
    $("#send_get").css('pointer-events','none');
var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
console.log(this.responseText);
               var str_rsponse = this.responseText;
               var new_string = str_rsponse.trim();
			if(new_string == 1 ){
                document.getElementById('show_callback_error').innerHTML = "<p style='color:green;font-size:11px; padding-left:0px;'> Thanks for submission..!! A member of our team will contact you as per your preferable time.</p>";
                		$("#send_get").text('Send');
               			$("#send_get").css('pointer-events','block');
				document.getElementById('call_back_name').value="";
				document.getElementById('call_back_number').value="";
				document.getElementById('call_back_time').value="";
			  }
                else if( new_string  == 0 ){ 
				document.getElementById('show_callback_error').innerHTML = "<p style='color:red;font-size:11px;padding-left:0px;'> Your message couldn't be sent.</p>";
			}
                 
            }else  {  }
        };
        xmlhttp.open('POST', 'backend/sendcallbackform.php?a='+call_back_name+'&b='+call_back_number+'&c='+call_back_time+'&d='+call_back_form_title, true);
        xmlhttp.send();
    }

}



window.onload = generateCaptcha;
var captcha;
$("#submit_query_form_header_mobile").submit(function(e) {
    var t = document.getElementById("full_name_header").value,
        o = document.getElementById("contact_no_header").value,
        n = document.getElementById("location_book_now_form").value,
        a = document.getElementById("location_book_now_form"),
        n = a[a.selectedIndex].text,
        r = document.getElementById("email_form_book_now").value,
        l = document.getElementById("message_form_book_now").value,
        c = "Enquiry Details from Mobile",
        m = document.getElementById("inputText_book_now").value;
    if (m != captcha) generateCaptcha(), document.getElementById("show_captcha_error").innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Captcha doesn't match, please try again!! </p>", e.preventDefault();
    else {
        var s = new XMLHttpRequest;
        s.onreadystatechange = function() {
            if (4 == this.readyState && 200 == this.status) {
                console.log(this.responseText);
                var e = this.responseText,
                    t = e.trim();
                if (1 == t) {
                    document.getElementById("show_captcha_error").innerHTML = "<p style='color:green;font-size:12px; padding-left:10px;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";
                    var o = document.getElementById("submit_query_form_header_mobile");
                    o.reset(), setTimeout(function() {
                        document.getElementById("show_captcha_error").innerHTML = ""
                    }, 2e3)
                } else 0 == t && (document.getElementById("show_captcha_error").innerHTML = "<p style='color:red;font-size:12px;padding-left:10px;'> Your message couldn't be sent.</p>")
            }
        }, s.open("POST", "backend/sendbooknowmailfrommob.php?a=" + t + "&b=" + o + "&c=" + n + "&d=" + r + "&e=" + l + "&f=" + c, !0), s.send()
    }
    e.preventDefault()
}), $("#submit_query_form_header").submit(function(e) {
    var t = document.getElementById("full_name_header1").value,
        o = document.getElementById("contact_no_header1").value,
        n = document.getElementById("location_book_now_form1").value,
        a = document.getElementById("location_book_now_form1"),
        n = a[a.selectedIndex].text,
        r = document.getElementById("email_form_book_now1").value,
        l = document.getElementById("message_form_book_now1").value,
        c = localStorage.getItem("form_header");
    if (1 == c) var m = "Enquiry Details from Scholarship Fest";
    else if (2 == c) var m = "Enquiry for diploma programme";
    else if (3 == c) var m = "Enquiry for 50% off for scholarship";
    else if (4 == c) var m = "Enquiry for corporate/group training";
    var s = document.getElementById("inputText_book_now1").value;
    if (s != captcha) generateCaptcha(), document.getElementById("show_captcha_error1").innerHTML = "<p style='color:red; padding-left:10px;   font-size: 13px;font-family: lato;'> Captcha doesn't match, please try again!! </p>", e.preventDefault();
    else {
        var d = new XMLHttpRequest;
        d.onreadystatechange = function() {
            if (4 == this.readyState && 200 == this.status) {
                console.log(this.responseText);
                var e = this.responseText,
                    t = e.trim();
                if (1 == t) {
                    document.getElementById("show_captcha_error1").innerHTML = "<p style='color:green;font-size:12px; padding-left:10px;'> Thank you for your enquiry. A member of our team will be in touch as soon as possible.</p>";
                    var o = document.getElementById("submit_query_form_header");
                    o.reset(), setTimeout(function() {
                        document.getElementById("show_captcha_error1").innerHTML = "";
                        var e = document.getElementById("show-book-now-pop-up-main");
                        e.close()
                    }, 2e3)
                } else 0 == t && (document.getElementById("show_captcha_error1").innerHTML = "<p style='color:red;font-size:12px;padding-left:10px;'> Your message couldn't be sent.</p>")
            }
        }, d.open("POST", "backend/sendbooknowmail.php?a=" + t + "&b=" + o + "&c=" + n + "&d=" + r + "&e=" + l + "&f=" + m, !0), d.send()
    }
    e.preventDefault()
});