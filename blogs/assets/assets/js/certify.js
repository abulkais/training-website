function validateForm(){var e=document.forms.myForm.st_fullname.value;if(""==e)return alert("Name must be filled out"),event.preventDefault(),!1;var t=document.forms.myForm.st_college.value;if(""==t)return alert("College Name must be filled out"),event.preventDefault(),!1;var a=document.forms.myForm.st_qualification.value;if(""==a)return alert("Qualification must be filled out"),event.preventDefault(),!1;var r=document.forms.myForm.st_tech.value;if(""==r)return alert("Technology must be filled out"),event.preventDefault(),!1;var n=document.forms.myForm.st_startdate.value;if(""==n)return alert("start date must be filled out"),event.preventDefault(),!1;var o=document.forms.myForm.st_enddate.value;if(""==o)return alert("end date must be filled out"),event.preventDefault(),!1;var u=document.forms.myForm.st_project.value;if(""==u)return alert("Project Name must be filled out"),event.preventDefault(),!1;var m=document.forms.myForm.st_duration.value;if(""==m)return alert("Course Duration must be filled out"),event.preventDefault(),!1;var l=document.forms.myForm.st_fees.value;if(!/^\d/.test(l))return alert("fees must be in digits."),event.preventDefault(),!1;var d=document.forms.myForm.st_city.value;if(""==d)return alert("Center Name must be filled out"),event.preventDefault(),!1;var i=document.forms.myForm.st_email.value;if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(i))return alert("Email must be filled out or in proper format."),event.preventDefault(),!1;var v=document.forms.myForm.st_contact.value;if(!/^\d{10}$/.test(v))return alert("Contact Number must 10 digits."),event.preventDefault(),!1;var c=document.forms.myForm.st_eno.value;return""==c?(alert("Enrollment no must be filled out"),event.preventDefault(),!1):void 0}function isNumber(e){e=e?e:window.event;var t=e.which?e.which:e.keyCode;return t>31&&(48>t||t>57)?!1:!0}function checkform(e){var t="";return""==e.CaptchaInput.value&&(t+="- Please Enter CAPTCHA Code.\n"),""!=e.CaptchaInput.value&&0==ValidCaptcha(e.CaptchaInput.value)&&(t+="- The CAPTCHA Code Does Not Match.\n"),""!=t?(alert(t),event.preventDefault(),!1):void 0}function ValidCaptcha(){var e=removeSpaces(document.getElementById("txtCaptcha").value),t=removeSpaces(document.getElementById("CaptchaInput").value);return e==t?!0:!1}function removeSpaces(e){return e.split(" ").join("")}function validateForm1(this){var e=!0;return e&=validateForm(),e&=checkform(this),e?!0:!1}$(function(){$("#st_startdate").datepicker({maxDate:"Now",dateFormat:"d-MM-yy"}),$("#st_enddate").datepicker({dateFormat:"d-MM-yy"})});var a=Math.ceil(9*Math.random())+"",b=Math.ceil(9*Math.random())+"",c=Math.ceil(9*Math.random())+"",d=Math.ceil(9*Math.random())+"",e=Math.ceil(9*Math.random())+"",code=a+b+c+d+e;document.getElementById("txtCaptcha").value=code,document.getElementById("CaptchaDiv").innerHTML=code,document.addEventListener("DOMContentLoaded",function(){document.getElementById("contact_form").addEventListener("submit",function(){document.getElementById("btn-submit").style.display="none",document.getElementById("my-loader").style.display="inline"},!1)},!1);