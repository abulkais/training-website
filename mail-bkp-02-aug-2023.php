
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
include('config.php');
date_default_timezone_set("Asia/Calcutta");
// All form validate number and email
function validate_mobile($number)
{
   if ($number != '') {

      return preg_match('/^[0-9]+$/', $number);
   }
}
function isValidEmail($email)
{
   if ($email != "") {
      return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
   }
}

//Successful career transition is a common outcome for our learners.
//Data Science Training Course(download brouchure)
//Data Science Curriculum(Download Curriculum)
//Download Sample Certificate(Download Sample Certificate) 
if (isset($_POST['home-page-submit'])) {
   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $pagename = $_POST['comingfrom'];

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }
   $isemailValid = isValidEmail($email);
   $isNumValid = validate_mobile($number);


   if (isset($_POST['nam_mail_no_title']) && !empty($_POST['nam_mail_no_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0) {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . "<br>" . "<b>Email : </b>" . $email . "<br>" . "<b> Contact No :  </b> " . $countrycode . $number . "<br>" .  "<b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

      $LastAssignTime = date('Y-m-d h:i A');

      $home_page = "INSERT INTO web_leads(name,email,mobile,assign_to_name,assign_by,assign_date,course,location) VALUES ('$name','$email','$number','Admin.','Auto','$LastAssignTime','$pagename','$data')";
      $result = mysqli_query($conn, $home_page);
   } else {
      echo '<script type="text/JavaScript"> 
     alert("Name , Email and Number fields are mandatory" );history.back();
    </script>';
   }
   $mail = new PHPMailer(true);


   try {

      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;

      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;
      $mail->send();
      echo '<script> window.location.href="thankyou"</script>';
      // header("location:thankyou");
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

//Excited about joining our program? 
//Request a Callback
if (isset($_POST['footer_requestcallback'])) {
   $name  = $_POST['name'];
   $Prefer_time = $_POST['Prefer_time'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $pagename = $_POST['comingfrom'];

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }
   $isNumValid = validate_mobile($number);


   if (isset($_POST['prefered_title']) && !empty($_POST['prefered_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  &&  isset($isNumValid) && $isNumValid != 0  && $Prefer_time != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . "<br>" . "<b>Prefered Time : </b>" . $Prefer_time . "<br>" . "<b> Contact No :  </b> " . $countrycode . $number . "<br>" .  "<b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

      $course = $Prefer_time . "\n" . $pagename;
      $LastAssignTime = date('Y-m-d h:i A');

      $sql = "INSERT INTO web_leads(name,course,mobile,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$course','$number','Admin.','Auto','$LastAssignTime','$data')";
      $result = mysqli_query($conn, $sql);
   } else {
      echo '<script type="text/JavaScript"> 
      alert("Name , Number and Prefered Time fields are mandatory" );history.back();
     </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

// Can’t find a BATCH you were looking for?(request batch)
if (isset($_POST['coursedate'])) {
   $date = $_POST['date'];
   $email  = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $pagename = $_POST['comingfrom'];
   $course = $date . "\n " . $pagename;

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }
   $isemailValid = isValidEmail($email);
   $isNumValid = validate_mobile($number);


   if (isset($_POST['coursedate_title']) && !empty($_POST['coursedate_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($date != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0) {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Email : </b>" . $email . "<br>" . "<b>Date : </b>" . $date . "<br>" . "<b> Contact No :  </b> " . $countrycode . $number .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

      $LastAssign = date('Y-m-d h:i A');
      $date_enquery = "INSERT INTO `web_leads` (`course` , `email` , `mobile` , `assign_to_name` , `assign_by` , `assign_date` , location) VALUES ('$date' , '$email' , '$number' , 'Admin.' , 'Auto' , '$LastAssign' , '$data')";
      $result = mysqli_query($conn, $date_enquery);
   } else {
      echo '<script type="text/JavaScript"> 
   alert("Date , Email and Number fields are mandatory" );history.back();
   </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

// Learn More 
if (isset($_POST['organization_submit'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $course_name = $_POST['course_name'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];
   $pageArray = array('About Page', 'Services Page', 'Corporate Training Page', 'Corporate Training Noida Page', 'Industrial Internship Page', 'Working Professionals', 'Training for Corporates Page', 'In House Training Page', 'Fly me a Trainer Page', 'Study Abroad Page', 'Placement Page');
   $ispagenameExistinPagearray = in_array($pagename, $pageArray);

   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);

   $course = $course_name . "\n" . $pagename;


   if (isset($_POST['title']) && !empty($_POST['title']) && !empty($_POST['title2']) && !empty($_POST['title3'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0  && $course_name != ""  && $ispagenameExistinPagearray != false) {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " .   $countrycode . $number  . " <br> <b>Course Name : </b>" . $course_name . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

      // find website or ads through url
      $url = $_SERVER['HTTP_REFERER'];
      $social = "social";
      if (strpos($url, $social) !== false) {
         $data = "Ads";
      } else {
         $data = "Website";
      }
      $query = str_replace("'", "\'", "$query"); //ignore '
      $course_name = str_replace("'", "\'", "$course_name"); //ignore '

      $LastAssignTime = date('Y-m-d h:i A');

      $organisation = "INSERT INTO web_leads(name,email,mobile,course,comment,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','$course','$query','Admin.','Auto','$LastAssignTime','$data')";
      $result = mysqli_query($conn, $organisation);
   } else {
      echo '<script type="text/JavaScript"> 
  alert("Name , Email , Number , Course name and captcha fields are mandatory" );history.back();
   </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;



      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');


      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}



if (isset($_POST['organization_course_submit'])) {

   $name  = $_POST['name'];
   $company_name =  $_POST['companyname'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $course_name = $_POST['course_name'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];
   $company = $company_name . "\n " . $pagename;
   $LastAssign = date('Y-m-d h:i A');

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br> <b>Name : </b>" . $name . "<br> <b>Company Name : </b>" . $company_name . " <br> <b>Work Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b>Course Name : </b>" . $course_name . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

   $query = str_replace("'", "\'", "$query"); //ignore '

   $training_data = "INSERT INTO web_leads(name,course,email,mobile,comment,assign_to_name,assign_by,assign_date)VALUES('$name','$company','$email','$number','$query','Admin.','Auto','$LastAssign')";

   $traning_result = mysqli_query($conn, $training_data);


   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();
      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


// corporate training
if (isset($_POST['training_advisor'])) {

   $name  = $_POST['name'];
   $company_name =  $_POST['companyname'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];


   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br> <b>Name : </b>" . $name . "<br> <b>Company Name : </b>" . $company_name . " <br> <b>Work Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $countrycode . $number  . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }

   $company = $company_name . "\n" . $pagename;  //for find page name;
   $LastAssignTime = date('Y-m-d h:i A'); // for assigndate name

   $query = str_replace("'", "\'", "$query"); //ignore '
   $course_name = str_replace("'", "\'", "$course_name"); //ignore '


   $organisation = "INSERT INTO web_leads(name,email,mobile,course,comment,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','$course_name','$query','Admin.','Auto','$LastAssignTime','$data')";
   $result = mysqli_query($conn, $organisation);
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

//Start Referring(Refer a Friend and get Reward) , enquire now , Apply now
if (isset($_POST['all_form_submit'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];

   $course = $_POST['comingfrom'];

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }
   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);




   if (isset($_POST['nam_mail_no_query_title']) && !empty($_POST['nam_mail_no_query_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0) {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $countrycode . $number  . " <br> <b> Query  :  </b> " . $query .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


      $query = str_replace("'", "\'", "$query"); //ignore '
      $LastAssignTime = date('Y-m-d h:i A');

      $all_form = "INSERT INTO web_leads(name,email,mobile,comment,assign_to_name,assign_by,assign_date,course,location) VALUES ('$name','$email','$number','$query','Admin.','Auto','$LastAssignTime','$course','$data')";

      $result = mysqli_query($conn, $all_form);
   } else {
      echo '<script type="text/JavaScript"> 
      alert("Name , Email and Number fields are mandatory" );history.back();
      </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


//Inspiring upcoming generation of learners
if (isset($_POST['all_form_submit1'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $taining = $_POST['taining'];
   $pagename = $_POST['comingfrom'];

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }
   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);

   if (isset($_POST['nam_mail_no_query_title1']) && !empty($_POST['nam_mail_no_query_title1'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0 && $taining != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " .    $countrycode  . $number  . " <br> <b> Type of Inquiry  :  </b> " . $taining .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

      $course =  $taining . "\n" . $pagename;
      $LastAssignTime = date('Y-m-d h:i A');

      $all_submit = "INSERT INTO web_leads(name,email,mobile,course,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','$course','Admin.','Auto','$LastAssignTime','$data')";
      $result = mysqli_query($conn, $all_submit);
   } else {
      echo '<script type="text/JavaScript"> 
   alert("Name , Email , Number , Training fields are mandatory" );history.back();
   </script>';
   }

   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

//Request Information contact page
if (isset($_POST['conatct_form_submit'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $taining = $_POST['taining'];
   $query  = $_POST['query'];
   $pagename = $_POST['comingfrom'];


   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }

   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);




   if (isset($_POST['con_title']) && !empty($_POST['con_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0  && $taining != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $countrycode . $number  . " <br> <b> Type of Inquiry  :  </b> " . $taining . "<br> <b>Query : </b>" . $query .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

      $query = str_replace("'", "\'", "$query"); //remove '

      $course = $taining . "\n" . $pagename;
      $LastAssignTime = date('Y-m-d h:i A');
      $sql1 = "INSERT INTO web_leads(name,email,mobile,course,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','$course','Admin.','Auto','$LastAssignTime','$data')";

      $result = mysqli_query($conn, $sql1);
   } else {
      echo '<script type="text/JavaScript"> 
  alert("Name , Email , Number and Training fields are mandatory" );history.back();
   </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

//Need Customized Curriculum? all course page
//Like the Features? Enquire now all course page
if (isset($_POST['mail_number'])) {

   //find website and ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $pagename = $_POST['comingfrom'];


   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);


   if (isset($_POST['nam_mail_title']) && !empty($_POST['nam_mail_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if (isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0) {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename .  "<br><b>Email : </b>" . $email . "<br>" . "<b> Contact No :  </b> " . $countrycode . $number .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');



      $LastAssignTime = date('Y-m-d h:i A');
      $mail_number = "INSERT INTO web_leads(email,mobile,assign_to_name,assign_by,assign_date,course,location) VALUES ('$email','$number','Admin.','Auto','$LastAssignTime','$pagename','$data')";
      $result = mysqli_query($conn, $mail_number);
   } else {
      echo '<script type="text/JavaScript"> 
   alert("Email and Number fields are mandatory" );history.back();
   </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


if (isset($_POST['subscribe_mail'])) {

   $email = $_POST['email'];

   $html   = " Hi," . "<br>" . "Subscribe E-mail " .  "<br><b>Email : </b>" . $email . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in ';
      $mail->Body    = $html;


      $mail->send();

      // header ("Location:thankyou");

      echo  '<script> alert("Thank you for subscribing");history.back();  </script>';
      // header("Location:https://kvch.in");
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

// old  page mail function
if (isset($_POST['course_page'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $course_name = $_POST['course_name'];
   $location = $_POST['location'];
   $query = $_POST['query'];


   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);




   if (isset($_POST['im_interested']) && !empty($_POST['im_interested']) && !empty($_POST['im_interested2']) && !empty($_POST['im_interested3'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0  && $course_name != ""  && $location != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $course_name . " Page " . "<br> <b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b>Course Name : </b>" . $course_name . "<br> <b>Location :</b> " . $location . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('d-M-Y');
      $query = str_replace("'", "\'", "$query"); //ignore '
      $course_name = str_replace("'", "\'", "$course_name"); //ignore '
      $LastAssignTime = date('Y-m-d h:i A');
      $course_page = "INSERT INTO web_leads(name,email,mobile,course,location,comment,assign_to_name,assign_by,assign_date) VALUES ('$name','$email','$number','$course_name','$location','$query','Admin.','Auto','$LastAssignTime')";
      $result = mysqli_query($conn, $course_page);
   } else {
      echo '<script type="text/JavaScript"> 
      alert("Name , Email , Number , Course name and Location fields are mandatory" );history.back();
     </script>';
   }



   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   =  true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $course_name;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}

// ioacml register now
if (isset($_POST['register_form'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $pagename = $_POST['comingfrom'];


   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }

   $LastAssignTime = date('Y-m-d h:i A');
   $register = "INSERT INTO web_leads(name,email,mobile,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','Admin.','Auto','$LastAssignTime','$data')";

   $result = mysqli_query($conn, $register);


   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();
      echo '<script> window.location.href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=5150817"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}



//linguaskill from
if (isset($_POST['Linguaskill_form'])) {
   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $linguradio = $_POST['linguradio'];
   $linguadate = $_POST['linguadate'];
   $query = $_POST['query'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $pagename = $_POST['comingfrom'];

   $course = $_POST['comingfrom'];

   // number and email validation check
   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);

   // linguaskill country related code start
   $linguaskill129 = "Linguaskill All 4 Skills - Exam Price (GBP 129)";
   $linguaskill99 = "Linguaskill (Listening & Reading only) - Exam Price (GBP 99)";

   $india = "+91 (IN) ";
   $vietnam = "+84 (VN) ";
   $malaysia = "+60 (MY) ";
   $uzbek = "+998 (UZ) ";
   $hongkong = "+852 (HK) ";
   $china = "+86 (CN) ";

   //end

   //bot protection code value not not save
   if (isset($_POST['nam_mail_no_query_title']) && !empty($_POST['nam_mail_no_query_title'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }


   // E-mail body and database
   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0 && $linguradio != "" && $linguadate != "" && $gender != "" && $dob != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>FullName : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $countrycode . $number  . "<br> <b> Exam Module : </b>" . $linguradio . "<br> <b> Exam Date : </b>" . $linguadate . "<br> <b> Gender : </b>" . $gender . "<br> <b> DOB : </b>" . $dob . " <br> <b> Query  :  </b> " . $query .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


      $query = str_replace("'", "\'", "$query"); //ignore '
      $LastAssignTime = date('Y-m-d h:i A');

      $all_form1 = "INSERT INTO web_leads(name,email,mobile,comment,assign_to_name,assign_by,assign_date,course,location,gender,age) VALUES ('$name','$email','$number','$query','Admin.','Auto','$LastAssignTime','$course','$data','$gender','$dob')";

      $result = mysqli_query($conn, $all_form1);
   } else {
      echo '<script type="text/JavaScript"> 
      alert("Name, Email, Number, Select Module, Exam Date, Gender and Date of Birth fields are mandatory" );history.back();
      </script>';
   }
   //end

   // user thanks for submission layout
   $msg1 = '<div style="background-color:#e0e0eb;width:1000px;padding:10px">
    <div style="background-color:#ffffff;width:500px;margin-left:200px;padding:50px"><span class="im">
			<div>
               <img src="https://kvch.in/nigeria/assets-new/img/logo.webp"
					width="100px">
               <img src="https://kvch.in/assets-new/img/linguaskill-logo.webp"
					width="150px" style="float:right">
               
               </div>
			<hr>
			<p style="font-size:17px;color:#000000">Dear <span style="font-weight:bold"> ' . $_POST['name'] . '</span></p>
        <p style="font-size:17px;color:#000000">Thank&nbsp;you for&nbsp;your&nbsp;submission for&nbsp;appearing&nbsp;in the Linguaskill&nbsp;Exam. Your details has been received as below:-</p>

        <p style="font-size:17px;color:#000000; margin:0px; padding:0px">Module - <span style="font-family: "Poppins", sans-serif;font-size:18px"> ' . $_POST['linguradio'] . '</span></p>

        <p style="font-size:17px;color:#000000; margin:0px; padding:0px">Date of Exam - ' . $_POST['linguadate'] . '<span style="font-family: "Poppins", sans-serif;font-size:18px"><br></span></p>
        <p style="font-size:17px;color:#000000; margin:0px; padding:0px">Contact No - ' . $_POST['countrycode'] . $_POST['number'] . '</p>
        <p style="font-size:17px;color:#000000; margin:0px; padding:0px">Gender - ' . $_POST['gender'] . '</p>
        <p style="font-size:17px;color:#000000; margin:0px; padding:0px">Date of Birth - ' . $_POST['dob'] . '</p>
        <p style="font-size:17px;color:#000000; margin:0px; padding:0px">Message - ' . $_POST['query'] . '</p>
        </span>
        <p style="font-size:17px;color:#000000">Please note that if you have made the payment , kindly send your scan copy of valid ID proof on <b><a href="mailto:corporate@kvch.in"
					target="_blank">corporate@kvch.in</a>&nbsp;</b></p>

            <div class="im">
                <p style="font-size:17px;color:#000000">For any immediate assistance related to payment or others kindly&nbsp;contact&nbsp;on&nbsp;
                </p>
                <p style="font-size:17px;color:#000000"><b>Whatsapp at&nbsp;+ 91 9212080630&nbsp; &nbsp; &nbsp; &nbsp;
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Zalo App&nbsp;
						&nbsp;at&nbsp;+ 91 9266625606</b></p>
                <p style="font-size:17px;color:#000000">Regards,</p>
                <p style="font-size:17px;color:#000000">Team KVCH</p>
            </div>
        </div>
       </div>';
   //end


   // create object
   $mail = new PHPMailer(true);

   try {
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');


      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;

      $mail->send();


      //1 Enable this link if you want Partitcular country like (India, Vietnam, Malaysia, Uzbekistan, Hong Kong, China) users to be sent a Payment  page and disabled thankyou-linguaskill link below of 2 comment section
      // if ((($india == $countrycode) || ($vietnam == $countrycode) || ($malaysia == $countrycode) || ($uzbek == $countrycode) || ($hongkong == $countrycode) || ($china == $countrycode)) && ($linguaskill129 == $linguradio)) {
      //    echo '<script> window.location.href="https://buy.stripe.com/5kA5lVekffgj0P6cNi"</script>';
      // } else if ((($india == $countrycode) || ($vietnam == $countrycode) || ($malaysia == $countrycode) || ($uzbek == $countrycode) || ($hongkong == $countrycode) || ($china == $countrycode)) && ($linguaskill99 == $linguradio)) {
      //    echo '<script> window.location.href="https://buy.stripe.com/14keWv7VRfgj9lCcNh"</script>';
      // } else {
      //    echo '<script> window.location.href="thankyou-linguaskill"</script>';
      // }


      //2 Enable this link if you want all users to be sent a thank you page and disabled country link below of 1 comment section
      echo '<script> window.location.href="thankyou-linguaskill"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }

   //end

   //again  creat object for user submission ui

   $mail_user = new PHPMailer(true);

   try {
      $mail_user->isSMTP();
      $mail_user->Host       = 'smtp.gmail.com';
      $mail_user->SMTPAuth   = true;
      $mail_user->Username   = 'training@kvch.in';
      $mail_user->Password   = 'drlaeahqejaxtlhq';
      $mail_user->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail_user->Port       = 465;

      $mail_user->setFrom('training@kvch.in', 'KVCH');
      $mail_user->addAddress($email);
      $mail_user->addReplyTo('training@kvch.in');

      $mail_user->isHTML(true);
      $mail_user->Subject = 'Thank you for your submission';

      $mail_user->MsgHTML($msg1);
      $mail_user->send();
   } catch (Exception $e) {
      echo "Message to user could not be sent. Mailer Error: {$mail_user->ErrorInfo}";
   }
}


// cept
if (isset($_POST['cept-submit'])) {
   $name  = $_POST['name'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $date = $_POST['date'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];


   $course = $_POST['comingfrom'];


   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);

   if (isset($_POST['cambridge-English-placement-test']) && !empty($_POST['cambridge-English-placement-test'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0 && $date != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $countrycode . $number  . "<br> <b> Exam Date : </b>" . $date . " <br> <b> Query  :  </b> " . $query .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


      $query = str_replace("'", "\'", "$query"); //ignore '
      $LastAssignTime = date('Y-m-d h:i A');

      $all_form1 = "INSERT INTO web_leads(name,email,mobile,comment,assign_to_name,assign_by,assign_date,course,location) VALUES ('$name','$email','$number','$query','Admin.','Auto','$LastAssignTime','$course','$data')";

      $result = mysqli_query($conn, $all_form1);
   } else {
      echo '<script type="text/JavaScript"> 
      alert("Name, Email, Number and Date fields are mandatory" );history.back();
      </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();


      echo '<script> window.location.href="https://checkout.stripe.com/c/pay/cs_live_a1FGqqsv6ktXODj6jjwCAd4tObbZf3E6JhrVrTgozNVnDAEZgACFLAiYYw#fidkdWxOYHwnPyd1blppbHNgWmtScGdEdUFwYGB1Q2Jmam90f1BsTDI2STU1T1NJSlZkNGAnKSd1aWxrbkB9dWp2YGFMYSc%2FJ2BTZGFWdzVxdWE9ZzddYDU1TycpJ3dgY2B3d2B3SndsYmxrJz8nbXFxdXY%2FKipycnIrYmpqYmlgK2ZqaConeCUl"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}




// corporate training banner form
if (isset($_POST['corporate-training-form'])) {
   $name  = $_POST['name'];
   $company_name =  $_POST['companyname'];
   $technology =  $_POST['technology'];
   $email = $_POST['email'];
   $countrycode = $_POST['countrycode'];
   $number = $_POST['number'];
   $message = $_POST['message'];
   $pagename = $_POST['comingfrom'];

   if (isset($_POST['corpoarte-training-form']) && !empty($_POST['corpoarte-training-form'])) {
      echo '<script type="text/JavaScript"> 
      alert("Are you a Human or Bots ");</script>';
      echo '<script> window.location.href="404"</script>';
      die();
   }
   $isNumValid = validate_mobile($number);
   $isemailValid = isValidEmail($email);

   if ($name != ""  && isset($isemailValid)  &&  isset($isNumValid) && $isNumValid != 0 && $company_name != "" && $technology != "") {
      $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br> <b>Name : </b>" . $name  . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $countrycode . $number  . "<br> <b>Company Name : </b>" . $company_name .  " <br> <b> Technology  :  </b> " . $technology . " <br> <b> Message  :  </b> " . $message . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


      $company = $company_name . "\n" . $pagename;  //for find page name;
      $LastAssignTime = date('Y-m-d h:i A'); // for assigndate name

      $query = str_replace("'", "\'", "$query"); //ignore '
      $course_name = str_replace("'", "\'", "$course_name"); //ignore '


      $organisation = "INSERT INTO web_leads(name,email,mobile,course,message,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','$course_name','$message','Admin.','Auto','$LastAssignTime','$data')";
      $result = mysqli_query($conn, $organisation);
   } else {
      echo '<script type="text/JavaScript"> 
      alert("Name, Email, Number, Company Name and Technology  fields are mandatory" );history.back();
      </script>';
   }
   $mail = new PHPMailer(true);

   try {


      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'training@kvch.in';
      $mail->Password   = 'drlaeahqejaxtlhq';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;


      $mail->setFrom('training@kvch.in', 'KVCH');
      $mail->addAddress('webdeveloper.sisgain@gmail.com');
      $mail->addReplyTo('training@kvch.in');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}
