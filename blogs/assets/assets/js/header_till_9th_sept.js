$('a[rel=popover]').popover();

$('.bg-ad-header p span').on('click', function() {
    $('.bg-ad-header').fadeToggle("slow");
});

$('.bg-ad-header .col-xs-1 span').on('click', function() {
    $('.bg-ad-header').fadeToggle("slow");
});

function bookNowHeaderMain(v) {
    //document.getElementById("show-book-now-pop-up-main").open = true;
    //document.getElementById("show-book-now-pop-up-main").setAttribute("open", "true");

    generateCaptcha();
    var v = v;
    localStorage.setItem('form_header', v);
}

function closeDialog() {
    //var x = document.getElementById("show-book-now-pop-up-main");
   // x.close();
}

function isNumberKey(evt) {

    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 47 || charCode > 57))
        return false;

    return true;
}
function genetaterecaptchaonclick() {
    generateCaptcha();
}
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
    fbq('init', '268171933576802');
    fbq('track', 'PageView');

	 window.$zopim || (function(d, s) {
        var z = $zopim = function(c) {
                z._.push(c)
            },
            $ = z.s =
            d.createElement(s),
            e = d.getElementsByTagName(s)[0];
        z.set = function(o) {
            z.set.
            _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "https://v2.zopim.com/?4pkaL7DsKn4v0g7nXt0wWhTNH3FA8b86";
        z.t = +new Date;
        $.
        type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");

		 (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {
            s.className = s.className.replace(RegExp(' ?' + y), '')
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
            i();
            h.end = null
        }, c);
        h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
        'GTM-PP7Q642': true
    });

    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-100393938-1', 'kvch.in');
    ga('require', 'GTM-PP7Q642');
    ga('send', 'pageview');

	/*******************************************ENDS********************************************/
/*******************CHECK COOKIES EXIST OR NOT******************/
$( document ).ready(function() {  
});
/***********************END*************************************/
/***********************verify page code to display popup*************************************/
     window.onload = function() {
	//alert('new header html');// setTimeout(delay1, 5000);
	 var url=window.location;
	  var homepageurl=window.location;
     // alert(homepageurl);
	
     //var pageurl=window.location.href.indexOf('verifycert');
	 //var pageurlsecond=window.location.href.indexOf('certificate');
	 if(url=='https://kvch.in/certificate-form.html')
	   {
	   
         var pageurlverifycert='cert';
	   }
	   if(url=='https://kvch.in/verifycert')
	     {
		   
            var pageurlverifyver='verify';
		 }
	    
      
    var cvalue=localStorage.getItem("modal_email_t"); 
    
   //alert('this is value'+cvalue);
    if(cvalue==null)
      { 
          //alert('value'+pageurl);
         if(pageurlverifycert!='cert' && pageurlverifyver!='verify')//if(pageurl != 29|| pageurlSecond = -1)
         {  // alert('popup');
			setTimeout(delay1, 5000);
	         if(homepageurl=='https://kvch.in')
			 {
				 //$('#show-course').css('show-course','block');
			  document.getElementById('show-course').style.display="block";
			 }
            
         }
          
		  /*else if(pageurl!=27)
		  {
		    setTimeout(delay1, 5000);
		  }
		  else if(pageurlsecond!=-1)
		  {
		   setTimeout(delay1, 5000);
		  }*/
      }
     //alert(pageurl);    
}
/************************************END verify code to display popup*************************/ 
function delay1() {

    booknowmodel.style.display = "inline";
}

var booknowmodel = document.getElementById('myModal1');
var closebtn = document.getElementsByClassName("close-btn")[0];
var bookbtn = document.getElementById("booknowbtn");



bookbtn.onclick = function() {
    booknowmodel.style.display = "inline";
}
closebtn.onclick = function() {
    booknowmodel.style.display = "none";
}

window.onclick = function(event1) {
    if (event1.target == booknowmodel) {
        booknowmodel.style.display = "none";
    }
}

/*************************SELECT COURSE POPUP******************************/
function searchCourseKeyPressone(e) {
	//alert('keypressone');
    $("#searchboxcourses-title").html("");
    var s = document.getElementById("course_name").value;
    if ("" != s) {
        var t = new XMLHttpRequest;
        t.onreadystatechange = function() {
            if (4 == this.readyState && 200 == this.status)
                if (console.log(this.responseText), "No result found" == this.responseText) document.getElementById("searchboxcourses-title").style.height = "33px", document.getElementById("searchboxcourses-title").style.overflow = "hidden", document.getElementById("searchboxcourses-title").style.display = "block", document.getElementById("searchboxcourses-title").innerHTML = "<ul> <li style='color:red;'> " + this.responseText + "</li></ul>";
                else {
                    var e = JSON.parse(this.responseText);
                    document.getElementById("searchboxcourses-title").innerHTML = "";
                    for (var s = 0; s < e.length; s++) console.log(e), $("#searchboxcourses-title").append('<ul><li class="li-hover"><span onclick="getTitle('+"'"+e[s].name+"'"+')">'+ e[s].name +'</span></li></ul>');
                    document.getElementById("searchboxcourses-title").style.display = "block", document.getElementById("searchboxcourses-title").style.height = "155px", document.getElementById("searchboxcourses-title").style.overflow = "scroll"
					
                }
        }, t.open("GET", "backend/getcoursename.php?courseval=" + s, !0), t.send()
    } else document.getElementById("searchboxcourses-title").innerHTML = "", document.getElementById("searchboxcourses-title").style.display = "none"
}
/****************************END*****************'"+e[s].name+"'******END POPUP**************/
function getTitle(title)
{
  
  document.getElementById('course_name').value=title;
}
      function validateForm3() { 
    var name = document.forms["sentMessage1"]["qname"].value;
    if (name == "") {
        alert("Name must be filled out");
        event.preventDefault();
        return false;
    }
    // var cours=document.forms["sentMessage1"]["page_name"].value;

    var email = document.forms["sentMessage1"]["qemail"].value;
    if (email == "") {
        alert("email must be filled out");
        event.preventDefault();
        return false;
    }
    
    var loc = document.forms["sentMessage1"]["qloc"].value;
    if (loc == "") {
        alert("Location must be filled out");
        event.preventDefault();
        return false;
    }
    var phone = document.forms["sentMessage1"]["qphone"].value;
        if (/^\d{10}$/.test(phone)) {
            // value is ok, use it
        } else {
            alert("Invalid number; must be ten digits")
            event.preventDefault();
            return false;
        }
        var x = document.forms["sentMessage1"]["qemail"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            alert("Not a valid e-mail address");
            event.preventDefault();
            return false;
        }
localStorage.setItem("modal_email_t",x);
//alert('this is yourb dataname'+email+'-'+loc+'-'+phone+'-'+cours+'-'+address);
		
}
  /*****************************SET COOKIE VALUE*******************************************/
		 
        
		/**********************************************END SET COOKIES VALUE**********************/	
     function checkform5(theform) {
    var why1 = "";

    if (theform.CaptchaInputhead.value == "") {
        why1 += "- Please Enter CAPTCHA Code.\n";
    }
    if (theform.CaptchaInputhead.value != "") {
        if (ValidCaptcha1(theform.CaptchaInputhead.value) == false) {
            why1 += "- The CAPTCHA Code Does Not Match.\n";
        }
    }
    if (why1 != "") {
        alert(why1);
        event.preventDefault();
        return false;
    }
}

var a = Math.ceil(Math.random() * 9) + '';
var b = Math.ceil(Math.random() * 9) + '';
var c = Math.ceil(Math.random() * 9) + '';
var d = Math.ceil(Math.random() * 9) + '';
var e = Math.ceil(Math.random() * 9) + '';

var code1 = a + b + c + d + e;
document.getElementById("txtCaptchahead").value = code1;
document.getElementById("CaptchaDivhead").innerHTML = code1;

// Validate input against the generated number
function ValidCaptcha1() {
    var str11 = removeSpaces1(document.getElementById('txtCaptchahead').value);
    var str21 = removeSpaces1(document.getElementById('CaptchaInputhead').value);
    if (str11 == str21) {
        return true;
    } else {
        return false;
    }
}

// Remove the spaces from the entered and generated code
function removeSpaces1(string) {
    return string.split(' ').join('');
}
