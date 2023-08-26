<?php    
    if($_REQUEST['h'] == 'courseDetailForm'){
		function get_client_ip() {
				$ipaddress = '';
				if (isset($_SERVER['HTTP_CLIENT_IP']))
					$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
				else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
					$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
				else if(isset($_SERVER['HTTP_X_FORWARDED']))
					$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
				else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
					$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
				else if(isset($_SERVER['HTTP_FORWARDED']))
					$ipaddress = $_SERVER['HTTP_FORWARDED'];
				else if(isset($_SERVER['REMOTE_ADDR']))
					$ipaddress = $_SERVER['REMOTE_ADDR'];
				else
					$ipaddress = 'UNKNOWN';
				return $ipaddress;
			}
		 $PublicIP = get_client_ip(); 
		 $json  = file_get_contents("http://api.ipstack.com/$PublicIP?access_key=a1b253e3baa847098a071d7e1631fe1a");
		 @$json  =  json_decode($json ,true);
		 $country =  $json['country_name'];
		 $region= $json['region_name'];
		 $city = $json['city'];


function getBrowser() 
{ 
    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Internet Explorer'; 
        $ub = "MSIE"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 
    }
    elseif(preg_match('/OPR/i',$u_agent)) 
    { 
        $bname = 'Opera'; 
        $ub = "Opera"; 
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { 
        $bname = 'Google Chrome'; 
        $ub = "Chrome"; 
    } 
    elseif(preg_match('/Safari/i',$u_agent)) 
    { 
        $bname = 'Apple Safari'; 
        $ub = "Safari"; 
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { 
        $bname = 'Netscape'; 
        $ub = "Netscape"; 
    } 

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 

// now try it
$ua=getBrowser();
$browser= $ua['name'] . " " . $ua['version'] . " on " . $ua['platform'];
$device= $ua['userAgent'];
?>

<?php
date_default_timezone_set('Asia/Kolkata');
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$d = $_REQUEST['d'];
$e = $_REQUEST['e'];
$f = $_REQUEST['f'];
$g = $_REQUEST['g'];


  //$to = "managerkvchibm@gmail.com";
	$to = "ritesh.sisgain@gmail.com";
  $subject = $e;
  $subject2="Thanks for contacting KVCH. We will get back to you shortly.";
  $message = "  \n Name:" .$a."\n Contact No: ".$b."\n Email: ".$c."\n Course Name: ".$f."\n Location:".$g."\n Query:".$d."\n IP Address: ".$PublicIP."\n Country:".$country."\n City: ".$city."\n Region: ".$region."\n Browser: ".$browser."\n Device: ".$device;
  
  $header = "From:training@kvch.in \r\n";
  $retval = mail ($to,$subject,$message,$header);
  
    $from = $c; // this is the sender's Email address
    $f_name=$a;

$message2='<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KVCH</title>
    <style type="text/css">
      /* Default CSS */ 
    </style>
  </head>
  <body style="margin: 0;padding: 0;background: #f1f1f1;color: #5b656e;">
	<div style="padding:20px;">
	  <p style="display:none;text-align:center;">!!</p>
		<a href="https://kvch.in"><img src="https://kvch.in/assets/img/kvch_thank_you_template.jpg" style="margin:0 auto;display:block;width:650px;" /></a>
	</div>
  </body>
</html>';

$sendmessage2='<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KVCH</title>
    <style type="text/css">
      /* Default CSS */ 
    </style>
  </head>
  <body style="background: #f1f1f1;color: #5b656e;">
	<div style="padding:20px;">
	  <p style="display:none;text-align:center;">!!</p>
		<a href="https://kvch.in"><img src="https://kvch.in/assets/img/kvch_thank_you_template.jpg" style="margin:0 auto;display:block;width:650px;" /></a>
	</div>
  </body>
</html>
';
  //echo $pg_title;
  $headers = "From: KVCH <training@kvch.in>\r\n"; 
  $headers.= "MIME-Version: 1.0\r\n"; 
  $headers.= "Content-Type: text/html; charset=utf-8\r\n";
      $result2=mail($from,$subject2,$sendmessage2,$headers); // sends a copy of the message to the sender
    
	
	
  if( $retval == true )
  {
print_r(1);
  }
  else
  {
print_r(0);
  }


$list = array (
    array(date("d-M-Y h:ia"), $a, $b, $c, $g, $f)
    
);

$fp = fopen('../lead-sheet_latest_changed.csv', 'a');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

$aurl1=$_COOKIE['mypageurl1'];

//Weblead db connection

$con=mysqli_connect("localhost","kvchin_kvcherp","0KfezKn}!bcc9u2l4%","kvchin_erp");
// Check connection
if(mysqli_connect_errno())
  {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $webLeadCheck = "SELECT mobile FROM web_leads where mobile =$b UNION SELECT mobile_no FROM new_counselling where mobile_no=$b";
  $webresult = mysqli_query($con,$webLeadCheck);
  if(mysqli_fetch_row($webresult) > 0)
  {
    $LastAssignTime = date('Y-m-d h:i A');
    
    $sql = "INSERT INTO web_leads (name,email,mobile,location,course,assign_to_name,assign_date,assign_by,lead_from)
        VALUES ('$a', '$c','$b','$g','$f','Admin','$LastAssignTime','Auto','Noida')";

    if(mysqli_query($con, $sql)) {
        if($con->query($update) === TRUE) {
            //echo "Record updated successfully";
        }else{
            //echo "Error updating record: " . $con->error;
        }
        }else{
        //echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }else{
    if($g == 'India')
    {
    
    $member= "SELECT mu_code,fname,lname FROM member_info where (account_status = 1 and work_place = 03) and (Status = 1) ORDER BY assign_time ASC";
    $result = mysqli_query($con,$member);
    $row = mysqli_fetch_row($result);
    $assignTo = $row['0'];

    $assignToName=$row['1'].' '.$row['2'];
    $LastAssignTime = date('Y-m-d h:i A');
    $mamberAssignTime = date('Y-m-d H:i:s');
    $sql = "INSERT INTO web_leads (name,email,mobile,location,course,assign_to,assign_to_name,assign_date,assign_by,lead_from)
        VALUES ('$a', '$c','$b','$g','$f','$assignTo','$assignToName','$LastAssignTime','Auto','Noida')";

    
    if (mysqli_query($con, $sql)) {
        $update = "UPDATE member_info SET assign_time = '$mamberAssignTime' WHERE mu_code=$assignTo";

        if($con->query($update) === TRUE) {
            //echo "Record updated successfully";
        } else {
            //echo "Error updating record: " . $con->error;
        }

    } else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  }
  else
  {
    $LastAssignTime = date('Y-m-d h:i A');
    
    $sql = "INSERT INTO web_leads (name,email,mobile,location,course,assign_to,assign_to_name,assign_date,assign_by,lead_from)
        VALUES ('$a', '$c','$b','$g','$f','','Admin.','$LastAssignTime','Auto','Noida')";

    
      if(mysqli_query($con, $sql)){
         //echo "Record Added successfully";
      }else{
         //echo "Error Added record: " . $con->error;
      }
    }
}
mysqli_close($con);

preg_match('/([^\/]+)(?=\.\w+$)/', $aurl1, $matches);

$urlext= str_replace("-", " ", $matches[0]);
$find=array("best","training","institute","project","based","noida","6","weeks","months");

$course1= str_replace($find,"", $urlext);
if($course1=="" OR $course1=="index"){$course1="Home Page";}
//echo $course1;
$course1 = trim(preg_replace('/\s+/',' ', $course1));

/*******sms*******/

$msgg = "Thanks for showing your interest in our training programme.One of our representative will get back to you shortly !
";
$msgg = urlencode($msgg);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://nimbusit.co.in/api/swsendSingle.asp");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "username=t1kvch&password=85396363&sender=KVCHCE&sendto=".$b."&message=".$msgg);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);

curl_close($ch);

/********own mobile msg*****/
$kvch_no='7042105630';

$msgg1 = $a." ".$b." looking for ".$course1." for ".$g." Location. Enquiry from KVCH.IN ".date("d-m-y h:ia");
//echo $msgg1;
$msgg1 = urlencode($msgg1);
//echo $msgg1;
$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL,"http://nimbusit.co.in/api/swsendSingle.asp");
curl_setopt($ch1, CURLOPT_POST, 1);
curl_setopt($ch1, CURLOPT_POSTFIELDS,
            "username=t1kvch&password=85396363&sender=KVCHCE&sendto=".$kvch_no."&message=".$msgg1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$server_output1 = curl_exec($ch1);

curl_close($ch1);

/********own 2nd mobile msg*****/
$kvch_no2='9810687680';

$msgg2 = $a." ".$b." looking for ".$course1." for ".$g." Location. Enquiry from KVCH.IN ".date("d-m-y h:ia");
//echo $msgg1;
$msgg2 = urlencode($msgg2);
//echo $msgg1;
$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_URL,"http://nimbusit.co.in/api/swsendSingle.asp");
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS,
            "username=t1kvch&password=85396363&sender=KVCHCE&sendto=".$kvch_no2."&message=".$msgg2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$server_output2 = curl_exec($ch2);

curl_close($ch2);

}


?>