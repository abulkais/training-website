<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
include('config.php');
date_default_timezone_set("Asia/Calcutta");

//Successful career transition is a common outcome for our learners.
//Data Science Training Course(download brouchure)
//Data Science Curriculum(Download Curriculum)
//Download Sample Certificate(Download Sample Certificate) 
if (isset($_POST['home-page-submit'])) {
   $name  = $_POST['name'];
   $email = $_POST['email'];
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
   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . "<br>" . "<b>Email : </b>" . $email . "<br>" . "<b> Contact No :  </b> " . $number .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

   $LastAssignTime = date('Y-m-d h:i A');
   $home_page = "INSERT INTO web_leads(name,email,mobile,assign_to_name,assign_by,assign_date,course,location) VALUES ('$name','$email','$number','Admin.','Auto','$LastAssignTime','$pagename','$data')";
   $result = mysqli_query($conn, $home_page);
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

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . "<br>" . "<b>Prefered Time : </b>" . $Prefer_time . "<br>" . "<b> Contact No :  </b> " . $number .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');



   $course = $Prefer_time . "\n" . $pagename;
   $LastAssignTime = date('Y-m-d h:i A');
   $sql = "INSERT INTO web_leads(name,course,mobile,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$course','$number','Admin.','Auto','$LastAssignTime','$data')";
   $result = mysqli_query($conn, $sql);

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

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


// Can’t find a BATCH you were looking for?(request batch)
if (isset($_POST['coursedate'])) {
   $date = $_POST['date'];
   $email  = $_POST['email'];
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

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Email : </b>" . $email . "<br>" . "<b>Date : </b>" . $date . "<br>" . "<b> Contact No :  </b> " . $number .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');



   $LastAssign = date('Y-m-d h:i A');
   $date_enquery = "INSERT INTO `web_leads` (`course` , `email` , `mobile` , `assign_to_name` , `assign_by` , `assign_date` , location) VALUES ('$date' , '$email' , '$number' , 'Admin.' , 'Auto' , '$LastAssign' , '$data')";
   $result = mysqli_query($conn, $date_enquery);
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
      //  $mail->addBCC('managerkvchibm@gmail.com');             


      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


// explore now
if (isset($_POST['organization_submit'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $course_name = $_POST['course_name'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];

   $course = $course_name . "\n" . $pagename;

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b>Course Name : </b>" . $course_name . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


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
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');
      // $mail->addBCC('managerkvchibm@gmail.com');             


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
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');
      //  $mail->addBCC('managerkvchibm@gmail.com');             


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
   $number = $_POST['number'];
   $query = $_POST['query'];
   $pagename = $_POST['comingfrom'];


   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br> <b>Name : </b>" . $name . "<br> <b>Company Name : </b>" . $company_name . " <br> <b>Work Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

   // find website or ads through url
   $url = $_SERVER['HTTP_REFERER'];
   $social = "social";
   if (strpos($url, $social) !== false) {
      $data = "Ads";
   } else {
      $data = "Website";
   }

   $query = str_replace("'", "\'", "$query"); //ignore '

   $company = $company_name . "\n" . $pagename;  //for find page name;
   $LastAssign = date('Y-m-d h:i A');     // for assigndate name

   $training_data = "INSERT INTO `web_leads`(`name`,`course`,`email`,`mobile`,`comment`,`assign_to_name`,`assign_by`,`assign_date`,`location`)VALUES('$name','$company','$email','$number','$query','Admin.','Auto','$LastAssign','$data')";
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
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');
      //  $mail->addBCC('managerkvchibm@gmail.com');             


      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


//Start Referring(Refer a Friend and get Reward) , enquire now(button) , Data Science Training Course(Apply now button)
if (isset($_POST['all_form_submit'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
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

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b> Query  :  </b> " . $query .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');

   $query = str_replace("'", "\'", "$query"); //ignore '



   $LastAssignTime = date('Y-m-d h:i A');
   $all_form = "INSERT INTO web_leads(name,email,mobile,comment,assign_to_name,assign_by,assign_date,course,location) VALUES ('$name','$email','$number','$query','Admin.','Auto','$LastAssignTime','$course','$data')";

   $result = mysqli_query($conn, $all_form);

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

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


//Inspiring upcoming generation of learners
if (isset($_POST['all_form_submit1'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
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

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b> Type of Inquiry  :  </b> " . $taining .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');





   $course =  $taining . "\n" . $pagename;
   $LastAssignTime = date('Y-m-d h:i A');
   $all_submit = "INSERT INTO web_leads(name,email,mobile,course,assign_to_name,assign_by,assign_date,location) VALUES ('$name','$email','$number','$course','Admin.','Auto','$LastAssignTime','$data')";
   $result = mysqli_query($conn, $all_submit);
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

      echo '<script> window.location.href="thankyou"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}


//Request Information
if (isset($_POST['conatct_form_submit'])) {

   $name  = $_POST['name'];
   $email = $_POST['email'];
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

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename . "<br>" . "<b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b> Type of Inquiry  :  </b> " . $taining . "<br> <b>Query : </b>" . $query .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


   $query = str_replace("'", "\'", "$query"); //remove '

   $course = $taining . "\n" . $pagename;
   $LastAssignTime = date('Y-m-d h:i A');
   $sql1 = "INSERT INTO web_leads(name,email,mobile,course,assign_to_name,assign_by,assign_date,location,comment) VALUES ('$name','$email','$number','$course','Admin.','Auto','$LastAssignTime','$data','$query')";


   $result = mysqli_query($conn, $sql1);

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
   $number = $_POST['number'];
   $pagename = $_POST['comingfrom'];
   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $pagename .  "<br><b>Email : </b>" . $email . "<br>" . "<b> Contact No :  </b> " . $number .  "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('D-M-Y  h-i-s A');


   $LastAssignTime = date('Y-m-d h:i A');
   $mail_number = "INSERT INTO web_leads(email,mobile,assign_to_name,assign_by,assign_date,course,location) VALUES ('$email','$number','Admin.','Auto','$LastAssignTime','$pagename','$data')";

   $result = mysqli_query($conn, $mail_number);
   $mail = new PHPMailer(true);

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
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in ';
      $mail->Body    = $html;


      $mail->send();


      echo  '<script> alert("Thanks for subscribing.")  </script>';
      header("Location:https://kvch.in");
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

   $html   = " Hi," . "<br>" . "We have received Enquiry from KVCH.IN for : " . $course_name . " Page " . "<br> <b>Name : </b>" . $name . " <br> <b>Email : </b>" . $email . "<br> <b> Contact No :  </b> " . $number  . " <br> <b>Course Name : </b>" . $course_name . "<br> <b>Location :</b> " . $location . " <br> <b> Query  :  </b> " . $query . "<br><b> IP Address : </b> " . $_SERVER['REMOTE_ADDR'] . "<br><b> Device : </b> " . strtolower($_SERVER["HTTP_USER_AGENT"]) . "<br><b> Date : </b> " . date('d-M-Y');

   $query = str_replace("'", "\'", "$query"); //ignore '
   $course_name = str_replace("'", "\'", "$course_name"); //ignore '
   $LastAssignTime = date('Y-m-d h:i A');
   $course_page = "INSERT INTO `web_leads`(`name` , `email` , `mobile` , `course` , `location` , `assign_to_name` , `assign_by` , `assign_date` , `comment`) VALUES ('$name' , '$email' , '$number' , '$course_name' , '$location' , 'Admin.' , 'Auto' , '$LastAssignTime' , '$query')";
   $result = mysqli_query($conn, $course_page);



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
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');



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
      $mail->addAddress('v.arora@kvch.in');
      $mail->addReplyTo('training@kvch.in');
      $mail->addCC('v.arora@sisgain.com');
   



      $mail->isHTML(true);
      $mail->Subject = 'Enquiry from kvch.in : ' . $pagename;
      $mail->Body    = $html;


      $mail->send();
      echo '<script> window.location.href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?corpID=5150817"</script>';
   } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}
