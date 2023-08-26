<?php
error_reporting(0);
include 'includes/excel_reader.php';     // include the class
// creates an object instance of the class, and read the excel file data
// $excel = new PhpExcelReader;
//$excel->read('mpower/assets/Certificate-Verification-Students.xls');
$excel_data = '';
$eno = "";
/* if(isset($_POST['eno-submit']))
{
    $eno = $_POST['eno'];
    //$filename = 'students.csv';
    
$excel_data = sheetData($excel->sheets[0], $eno);
$excel_data1 = sheetData1($excel->sheets[0], $eno)[0];
$enoname = sheetData1($excel->sheets[0], $eno)[1];

} */
// this function creates and returns a HTML table with excel rows and columns data
// Parameter - array with excel worksheet data
function sheetData($sheet, $enroll)
{

    $x = 1;
    $data = "";
    while ($x <= $sheet['numRows']) {


        if ($enroll == $sheet['cells'][$x][2]) {
            $data .= '<tr>';
            $data .= '<td>' . $sheet['cells'][$x][3] . "</td>";
            $data .= '<td>' . $sheet['cells'][$x][4] . "</td>";
            $data .= '<td>' . $sheet['cells'][$x][5] . "</td>";
            //$data .= '<td><a href="#" onclick="window.open('"certificate.php?eno=$sheet['cells'][$x][1]", "win", "width=400,height=400"')">View Certification</a></td>';
            $data .= '<td><a id="myBtn" class="my-anchor" ';
            // $data .= "window.open('certificate.php?eno=";
            //$data .= $sheet['cells'][$x][1];
            // $data .= "', 'Certificate', 'directories=no, titlebar=yes, toolbar=no, location=no, status=no, menubar=no, scrollbars=no, resizable=no, width=800px, height=400px')";
            $data .= '>View Details</a></td>';
            $data .= '</tr>';
        }

        $x++;
    }
    if ($data == "") {
        $data = "<tr><td colspan='3' style='text-align:center; color:red;'>No Result Found</td></tr>";
        return $data;
    } else {
        return $data;
    }
}

function sheetData1($sheet, $enroll)
{

    $x = 1;
    $data = "";
    while ($x <= $sheet['numRows']) {


        if ($enroll == $sheet['cells'][$x][2]) {
            $data .= '<div class="even" >';
            $data .= '<div class="ver-search-results-line">';
            $data .= '<span class="cert-badge" >' . '<img style="width:100px;height:47px;" src="assets/img/certi-logo.jpg">' . "</span>";
            $data .= '<span style="font-family: Raleway, sans-serif;" class="credential">' . $sheet['cells'][$x][5] . "</span>";
            $data .= '<span style="font-family: Raleway, sans-serif;" class="date-certified">' . gmdate('l, j F Y', (($sheet['cells'][$x][6] - 25569) * 86400)) . "</span>";
            $data .= '<span style="font-family: Raleway, sans-serif;" class="date-certified">' . gmdate('l, j F Y', (($sheet['cells'][$x][7] - 25569) * 86400)) . "</span>";


            $data .= '</div></div>';
            $enoname = $sheet['cells'][$x][3];
        }

        $x++;
    }
    if ($data == "") {
        $data = "<tr><td colspan='3' style='text-align:center; color:red;'>No Result Found</td></tr>";
        return $data;
    } else {
        return array($data, $enoname);

        //return $data;
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Certificate Verification</title>
    <link rel="icon" href="assets-new/img/favicon.webp" type="image/x-icon" />
    <link href="assets/css/master.css" rel="stylesheet">
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js"></script>
    <link href="assets/css/certification.css" rel="stylesheet">
    <link href="assets/css/my-modal.css" rel="stylesheet">
    <meta charset="utf-8">

    <script>
        $(function() {
            $("#dialog").dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });

            $("#opener").on("click", function() {
                $("certificate.php").load();
            });
        });
    </script>



</head>

<body>
    <header class="page-header" style=" margin:0px; top:0; position:sticky; z-index:1000; background-color:#fff; border-top: 2px solid #cf2128; border-bottom: 2px solid #cf2128;">

        <div class="middle-header">

            <div class="header-container clearfix">

                <div class="header-info desk">

                    <ul class="clearfix">
                        <li>

                            <span>For International Nationals</span>

                            <a href="tel:18444455767 "><img src="assets-new/img/international.webp" alt=""> +1.844.44.55.767 </a>

                        </li>
                        <li>

                            <span>For Indian Nationals</span>

                            <a href="tel:919510860860"><img src="assets-new/img/india.webp" alt=""> +91.9510.860.860</a>

                        </li>

                    </ul>

                </div>

                <div class="logo">

                    <a href="https://kvch.in"><img src="assets-new/img/website-logo.webp" alt="logo"></a>

                </div>


                <a href="quick-pay" class="pay-down"> <b class="quick-pay1"> Quick Pay</b></a></li>







                <div class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>

                <nav class="nav-primary clearfix">

                    <ul class="menu-main-navigation menu clearfix">

                        <li class="menu-item-has-children"><a href="https://kvch.in">Training Solutions </a></li>

                        <li><a href="corporate-training">For Your Organization</a></li>

                        <li><a href="services">Services</a></li>

                        <li><a href="about"> About us </a></li>

                        <li><a href="contact"> Contact us</a></li>

                        <li><a href="quick-pay"> <b class="quick-pay"> Quick Pay</b></a></li>

                    </ul>

                </nav>

            </div>

        </div>

    </header>

    <link rel="stylesheet" href="assets-new/css/style.min.css" type="text/css">
    <link rel="stylesheet" href="assets-new/css/mega-menu.min.css" type="text/css">
    <style>
        .form-control {
            color: #000 !important;
        }

        .form-control::placeholder {
            text-transform: capitalize !important;
            font-size: 14px !important;
            color: #000 !important;
        }
    </style>

    <div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
        <div id="wrapper">
            <div id="loadheader"> </div>
            <div class="wrap-title-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="ui-title-page">Certificate Verification</h1>
                        </div>
                    </div>
                </div>
                <!-- end container-->
            </div>
            <!-- end wrap-title-page -->
            <div class="section-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="wrap-breadcrumb clearfix">
                                <ol class="breadcrumb">
                                    <li><a href="index"><i class="icon stroke icon-House"></i></a></li>
                                    <li class="active">Verify Certificate</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end section-breadcrumb -->
            <main class="main-content custom-body">
                <!-- end container -->
                <section class="section_contacts-form" style="padding: 10px 0 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 style="color: #45acd2; font-size: 40px; font-family: 'Raleway', sans-serif;">Verification</h3>
                                <h4 style="margin-bottom: 25px; font-family: 'Raleway', sans-serif;">Please enter Registration no. or Reference no. to check the status. Results will be displayed if the holder is currently certified.</h4>
                                <div class="wrap-subtitle">
                                  
                                </div>
                                <!-- end wrap-title -->
                                <div class="row">
                                    <div class="col-md-3"></div>


                                    <div class="col-md-6">
                                        <div style=" background-color:#bfe8f7; padding:30px;">
                                            <h3 style="text-align: center; margin-bottom:20px;">Search By Registration no. or Reference no.</h3>
                                            <form method="post" name="myForm" onsubmit="return checkform(this);">
                                                <input abindex="1" type="number" name="eno" class="form-control" placeholder="Registration no. or Reference no." style="border-radius: 10px;" required>
                                                <button name="eno-submit" class=" btn-block" style="padding: 10px; border-radius:10px; font-size:20px; border:none; background-color:orange; color:#fff; margin-top:20px;"> Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                                <!-- <form action=""></form> -->


                            </div>

                        </div>
                        <!-- end row -->
                        <br>


                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div style="  max-width:100%; padding: 5px;">
                                    <ul style="list-style-type: none;">
                                        <li id="myField111"></li>
                                    </ul>
                                    <?php
                                    if (isset($_POST['eno-submit'])) {
                                        $eno = $_POST['eno'];
                                        echo "<label style='font-size: 22px; font-family: Raleway, sans-serif; '> Result for Registration no. or Reference no. " . $eno . " </label><br>";
                                        echo "<table class='my-table'>";
                                        $h = fopen("assets/certificate-verification-students.csv", "r");
                                        if($eno==false){
                                         echo "error";
                                        }elseif ($h !== FALSE) {
                            
                                            // Convert each line into the local $data variable
                                            while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
                                                if (!empty($data[0])) {
                                                  
                                                    if ($eno == $data[0]) {
                                                        echo  " <tr>
                                                        <th style='width:25%;'>Name</th><th style='width:24%;'>Country</th><th style='width:24%;'>Credentials</th><th style='width:21%;'></th>   
                                                        </tr>";
                                                        echo '<tr>';
                                                        echo '<td>' . $data[1] . "</td>";
                                                        echo '<td>' . $data[2] . "</td>";
                                                        echo '<td>' . $data[3] . "</td>";

                                                        echo '<td><a id="myBtn" class="my-anchor" ';

                                                        echo '>View Details</a></td>';
                                                        echo '</tr>';
                                                    }
                                                    
                                                } else   {

                                                    echo '<tr><td colspan="3" style="text-align:center; color:red;">No Result Found</td></tr>';
                                                }
                                            }
                                            // Close the file
                                            fclose($h);
                                        }
                                        echo "</table> ";
                                        echo '<script>',
                                        'window.scrollTo(0, 700);',
                                        '</script>';
                                    }
                                    ?>
                                    <p style="padding-top: 10px;"></p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                    </div>
                    <!-- end container -->
                </section>
                <!-- end section_contacts-form -->
            </main>
            <!-- end main-content -->
            <div id="loadfooter"> </div>
        </div>
        <!-- end wrapper -->
    </div>


    <!-- modal -->

    <div id="myModal" class="modal" style=" z-index:10000;">
        <!-- Modal content -->
        <div class="modal-content" style="background-color: #fff;">

            <div class="modal-body">


                <div class="custom-body" style="line-height:none;">
                    <div id="ver-search-results" class="detail-overlay" style="width:100%;">
                        <div class="ver-search-results-titles">

                            <script>
                                $(document).ready(function() {
                                    $('.cert-name-insert').text($('#cert-name').data('full-name'));
                                    var myURL = "/certification-detail-print?conId=" + $('#cert-name').data('conid');
                                    //$('.print-button-insert').attr('href', myURL);
                                    var d = new Date();
                                    var n = d.toDateString();
                                    $('.valid-date-insert').text(n);
                                });
                            </script>
                            <style>
                                #ver-search-results span.credential {
                                    width: 220px;

                                }

                                .cert-name-insert {
                                    -webkit-margin-after: 0;

                                }

                                #ver-search-results.detail-overlay a.print-button-insert {
                                    position: static;

                                }

                                .btnwrapper {
                                    float: right
                                }

                                .name-button-header {
                                    margin-bottom: 20px;


                                }

                                .fancybox-inner {
                                    overflow: hidden !important;

                                }
                            </style>
                            <!-- <div class="name-button-header" style="font-family: 'Raleway', sans-serif;">
                                <span>
                                    <h2 style="font-family: 'Raleway', sans-serif; font-size: 30px;" class="cert-name-insert"><?php echo $enoname; ?></h2>
                                </span>
                                <span class="close">&times;</span>
                            </div> -->
                            <div class="">
                                <span style="font-family: 'Raleway', sans-serif; font-size: 20px;" class="cert-badge-col-brace"></span>
                                <span style="font-family: 'Raleway', sans-serif; font-size: 20px;" class="credential">Credentials</span>
                                <span style="font-family: 'Raleway', sans-serif; font-size: 20px;" class="date-certified">Start Date</span>
                                <span style="font-family: 'Raleway', sans-serif; font-size: 20px;" class="date-certified">End Date</span>

                            </div>

                        </div>
                        <?php
                        $eno = $_POST['eno'];
                        $h = fopen("assets/certificate-verification-students.csv", "r");

                        if ($h !== FALSE) {
                            // Convert each line into the local $data variable
                            while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
                                if ($eno == $data[0]) {

                        ?>
                                    <div class="even">
                                        <div class="ver-search-results-line">
                                            <span class="cert-badge"><img style="width:100px;height:47px;" src="assets/img/certi-logo.jpg"></span>
                                            <span style="font-family: Raleway, sans-serif;" class="credential"><?php echo $data[3]; ?></span>
                                            <span style="font-family: Raleway, sans-serif;" class="date-certified"><?php echo $data[4]; ?></span>
                                            <span style="font-family: Raleway, sans-serif;" class="date-certified"><?php echo $data[5]; ?></span>

                                        </div>
                                    </div>
                        <?php
                                    //echo $enoname = $data[2];
                                }
                            }
                            // Close the file
                            fclose($h);
                        }
                        ?>

                        <div style="padding-top: 10px;">


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn1" style="font-family: 'Raleway', sans-serif;" href="https://www.linkedin.com/profile/add?startTask=<?php echo $data[1]; ?>" rel="nofollow" target="_blank">ADD TO LINKEDIN</a>
                        </div>

                        <div class="col-md-6">
                            <a class="close btn1" style="opacity:1!important;"> Close</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <?php
    include('assets-new/includes/scripts.php');
    include('assets-new/includes/footer.php');
    ?>




    <script>
        function delay1() {

            modal.style.display = "inline";
        }

        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "inline";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        document.onkeydown = function(evt) {
            evt = evt || window.event;
            var isEscape = false;
            if ("key" in evt) {
                isEscape = (evt.key == "Escape" || evt.key == "Esc");
            } else {
                isEscape = (evt.keyCode == 27);
            }
            if (isEscape) {
                modal.style.display = "none";
            }
        };
    </script>

</body>

</html>