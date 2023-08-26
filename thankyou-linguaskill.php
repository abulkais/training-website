<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title> KVCH | Thankyou</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="KVCH">
    <link rel="icon" href="assets-new/img/favicon.webp" type="image/x-icon" />


    <style>
        .th-linguaskill {
            margin: auto;
            display: table;
        }

        .th-linguaskill p {
            /* border-radius: 10px;
            padding: 10px;
            background-color: #174c9d; */
            display: flex;
            align-items: center;
        }


        .th-linguaskill img {
            margin-right: 10px;
            width: 50px;
        }

        .th-linguaskill a {
            font-size: xx-large;
            color: #000;
            font-weight: 600;
        }

        @media only screen and (max-width:500px) {
            .th-linguaskill img {
                margin-right: 10px;
                width: 30px;
                height: auto;
            }

            .th-linguaskill a {
                font-size: x-large;
            }
        }
    </style>

</head>

<body>
    <?php
    $url = '';
    include('assets-new/includes/header.php');
    include('assets-new/includes/course-navbar.php');
    ?>
    <!-- <hr> -->
    <div class="thanku-div">

        <div class="container" style="padding: 0;">
            <h2 style="text-align: center; color:black;">Thank you for your submission !</h2>

            <p class="thankyou-para-content">Your details has been received successfully !</p>

            <p class="thankyou-para-content">Kindly contact on the below numbers for the next steps.</p>
            <div class="row py-2">
                <div class="col-md-2 col-sm-1"></div>
                <div class="col-md-4 col-sm-5 mx-auto py-2">
                    <div class="th-linguaskill">
                        <p><img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-whatsapp-icon-png-image_6315990.png" alt=""> <a target="blank" href=" https://wa.me/919212080630?text=Hi kvch">+91 9212 080 630</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 mx-auto py-2">
                    <div class="th-linguaskill">
                        <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/2048px-Icon_of_Zalo.svg.png" alt=""> <a href="tel:+919266625607">+91 9266 625 607</a></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-1"></div>
            </div>

            <center>
                <a href="https://kvch.in/linguaskill"> <button class="btn">Home</button></a>
            </center>

        </div>

    </div>

    <?php
    include('assets-new/includes/scripts.php');
    include('assets-new/includes/footer.php');

    ?>

</body>

</html>